<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class MailController extends Controller
{
   public function basic_email()
   {
       Mail::send(['text'=>'mail'],['name','sarthak'],function($message){
           $message -> to('himanshu.nikhil.gupta@gmail.com','Please Check Your Password')->subject('Your Password');
           $message -> from('himanshu.nikhil.gupta@gmail.com','TBS Point');
       });
   }

}
