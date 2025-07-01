<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\WebRTCSignal;

class CallController extends Controller
{
    public function sendSignal(Request $request)
{
    broadcast(new WebRTCSignal($request->signalData, $request->to));
    return response()->json(['success' => true]);
}
}
