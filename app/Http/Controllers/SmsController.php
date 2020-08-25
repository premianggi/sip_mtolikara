<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
class SmsController extends Controller
{
    public function create()
    {
        return view('admin.sms.sms');
    }
    public function sendSms(Request $request){
        Nexmo::message()->send([
            'to'   => '813'.$request->mobile,
            'from' => '+6282275850769',
            'text' => 'Using the facade to send a message.'
        ]);
        Session::flash('success', 'SMS Send Successfully');
        return redirect('/sms');
    }
}
