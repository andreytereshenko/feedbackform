<?php

namespace App\Http\Controllers;

use App\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSetting extends Controller
{

   public function send (Request $request){
    $name = $request->name;
    $email=$request->email;
    $msg=$request->msg;
    $file=$request->file('file')->store('public');
// используем функцию Mail для отправки письма
    Mail::to('your_name@gmail.com')->send(new MailClass($name, $email, $msg, $file));
   }



}
