<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Call;

class TwilioWebhookController extends Controller
{
    public function callStatus(Request $request)
    {
        $callSid = $request->input('CallSid');
        $status  = $request->input('CallStatus');

        if (!$callSid) {
            return response()->json(['error' => 'Missing CallSid'], 400);
        }

        $call = Call::where('twilio_sid', $callSid)->first();

        if ($call) {
            $call->status = $status;

            if (in_array($status, ['completed', 'failed', 'busy', 'no-answer'])) {
                $call->ended_at = now();
            }

            $call->save();
        }

        return response()->json(['success' => true]);
    }
}
