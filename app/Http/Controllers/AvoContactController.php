<?php

namespace App\Http\Controllers;

use View;
use App\AvoContact;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Routing\Controller as BaseController;


class AvoContactController extends BaseController {

    // public function contactpage()
    // {
    //     $contact = AvoContact::all();
    //
    //     return view('pages.contact')->with(['contact' => $contact]);
    // }

    public function store(ContactFormRequest $request)
    {

        Mail::send('pages.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'subject' => $request->get('subject'),
                'message' => $request->get('message')
            ), function($message)
        {
            $message->from('sanjiarya2112@gmail.com');
            $message->to('mrtext21@gmail.com', 'Mr Cool')->subject('Test');
        });

    // return Redirect::route('contact')->with('message', 'Thank You. Your Message has been Submitted');

    }

}
