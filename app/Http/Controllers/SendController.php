<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sends.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function message(Request $request)
    {
        $message = $request->input('message');
        $phone = $request->input('phone');
        $encodeMessage = urlencode($message);
        $authkey = '';
        $senderId = '';
        $route = 4;
        $postData = $request->all();
        
        // print_r($phone);
        // exit();
        $phoneNumber = implode('', $postData['phone']);

        $arr = str_split($phoneNumber, '12');
        $phones = implode(",", $arr);

        $data = array(
            'authkey' => $authkey,
            'phones' => $phones,
            'message' => $encodeMessage,
            'sender' => $senderId,
            'route' => $route,

        );
        $url ="http://smsgateway.me/api/v3/messages/send";
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL =>$url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData,
        ));

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0 );

        $output = curl_exec($ch);
        if (curl_errno($ch))
        {
            echo 'error:' .curl_error($ch);
        }
        curl_close($ch);
        return redirect('/')->with('response', 'Message Sent Successfully');
    }
}
