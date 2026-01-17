<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Call;

class CallController extends Controller
{
    public function index()
    {
        $calls = Call::with('lead')->latest()->paginate(20);
        return view('admin.calls.index', compact('calls'));
    }

    public function delete($id){
        $call = Call::findOrFail($id);
        $call->delete();
        return redirect()->back()->with('success', 'Call record deleted successfully.');
    }
}
