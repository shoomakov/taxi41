<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Log;

class ContactUSController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUS()
    {
        return view('contactUS');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
        		'name' => 'required',
        		'email' => 'required|email',
        		'message' => 'required'
        	]);

        ContactUS::create($request->all());

        $get_name = Input::get('name');
        $get_email = Input::get('email');
        $get_message = Input::get('message');

        Mail::send(
          'email.work',
          [
            'name' => $get_name,
            'email' => $get_email,
            'themessage' => $get_message
          ],
          function($message) use ($get_name, $get_email, $get_message) {
            $message->to('sergey@shoomakov.ru')->subject('Заявка от водителя!');
          }
        );



        return back()->with('success', 'Thanks for contacting us!');
    }
}
