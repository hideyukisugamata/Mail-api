<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\SendTestMail;

class MailsendController extends Controller
{
    public function send(Request $request)
    {
        $to = [
            [
                'email' => $request -> toAddress,
                'name' => $request -> toAddressName,
            ]
        ];
        Mail::to($to) -> send(new SendTestMail($request));
        $error = Mail::failures();
        if(count($error) > 0){
            return response() -> json([
                'message' => 'Did not send',
                'errorResult' =>  $error
            ],401);
        }else{
            return response() -> json([
                'message' => 'Sent successfully',
                'Result' => $error
            ],200);
        }
    }

}
