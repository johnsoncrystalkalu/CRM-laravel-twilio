<?php

namespace App\Http\Controllers\Admin;

use App\Models\Call;
use App\Models\Lead;
use Twilio\Rest\Client;
use App\Imports\LeadsImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class LeadController extends Controller
{

    public function category(string $category)
    {

        // Normalize category
        $category = ucfirst(strtolower($category));

        // Allow only valid categories
        if (!in_array($category, ['Trading', 'Recovery'])) {
            abort(404);
        }

        $leads = Lead::where('category', $category)->Orderby('id', 'desc')->get();

        return view('admin.leads.index', compact('leads', 'category'));
    }


    public function show(Lead $lead)
    {

        return view('admin.leads.show', compact('lead'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
            'category' => 'required|string',
        ]);

        Excel::import(
            new LeadsImport(
                $request->category,
                Auth::user()->name
            ),
            $request->file('file')
        );

        return back()->with('success', 'Leads imported successfully');
    }
    public function bulkDelete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:leads,id',
        ]);

        Lead::whereIn('id', $request->ids)->delete();

        return back()->with('success', 'Selected leads deleted successfully.');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'state'        => 'nullable|string|max:50',
            'city'         => 'nullable|string|max:50',
            'zip_code'     => 'nullable|string|max:20',
            'age'          => 'nullable|integer',
            'dob'          => 'nullable|date',
            'lead_type'    => 'required|string',
            'status'       => 'nullable|string',
            'notes'        => 'nullable|string',
            'category'     => 'required|string',
        ]);

        $data['owner'] = Auth::user()->name;

        Lead::create($data);

        return back()->with('success', 'Lead added successfully!');
    }


    public function update(Request $request, Lead $lead)
    {
        $data = $request->validate([
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'state'        => 'nullable|string|max:50',
            'city'         => 'nullable|string|max:50',
            'zip_code'     => 'nullable|string|max:20',
            'age'          => 'nullable|integer',
            'dob'          => 'nullable|date',
            'lead_type'    => 'required|string',
            'status'       => 'nullable|string',
            'notes'        => 'nullable|string',
        ]);

        $lead->update($data);

        return back()->with('success', 'Lead updated successfully!');
    }

    public function destroy(Lead $lead)
{
    $lead->delete();

    return redirect()->route('admin.dashboard')->with('success', 'Lead deleted successfully!');
}



public function callLead(Lead $lead)
{
    $sid    = config('services.twilio.sid', env('TWILIO_SID'));
    $token  = config('services.twilio.token', env('TWILIO_AUTH_TOKEN'));
    $from   = config('services.twilio.phone', env('TWILIO_PHONE'));
    $to     = $lead->phone_number;

    $client = new Client($sid, $token);

    try {
        $call = $client->calls->create(
            $to,
            $from,
            [
                'url' => route('admin.twilio.twiml', ['lead' => $lead->id])
            ]
        );

        // Save call to database
        Call::create([
            'lead_id' => $lead->id,
            'status' => $call->status,  // queued, ringing, in-progress, completed
            'called_at' => now(),
            'twilio_sid' => $call->sid
        ]);

        return back()->with('success', 'Call initiated to ' . $to);
    } catch (\Exception $e) {
        return back()->with('error', 'Failed to make call: ' . $e->getMessage());
    }
}


public function callNumber(Request $request)
{
    $request->validate([
        'phone_number' => 'required|string'
    ]);

    $to = $request->phone_number;
    $sid = config('services.twilio.sid', env('TWILIO_SID'));
    $token = config('services.twilio.token', env('TWILIO_AUTH_TOKEN'));
    $from = config('services.twilio.phone', env('TWILIO_PHONE'));

    $client = new Client($sid, $token);

    try {
        $call = $client->calls->create(
    $to,
    $from,
    [
        'url' => route('admin.twilio.dialer.twiml')
    ]
);

        return back()->with('success', 'Call initiated to ' . $to);
    } catch (\Exception $e) {
        return back()->with('error', 'Failed to make call: ' . $e->getMessage());
    }
}



}
