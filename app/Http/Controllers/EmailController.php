<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;
use View;
use Mail;
use Client;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('alisoneuropa@gmail.com', 'Christian Nwamba');

            $message->to('alisoneuropa@gmail.com');
        });

        // check for failures
        if (Mail::failures()) {
            // return response showing failed emails
            return 'asdasdas';
        }
    }
}
