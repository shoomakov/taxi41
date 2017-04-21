<?php
namespace App\Http\Controllers;
use Mail;
use View;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests;

class MailerController extends BaseController {

  public function request()
  {
    $message = Input::get('message');
    // return View::make('contactus.store');
    // return 'test';
    // $user = User::find($id);
    // $test = new ContactUSController;
    // $test->contactUSPost($message);
    Mail::send('pages._social', array('key' => 'value'), function($message)
    {
        $message->to('info@taxi41.su')->subject('Заявка от водителя!');
    });

    // return Redirect::to('users');
  }

}
