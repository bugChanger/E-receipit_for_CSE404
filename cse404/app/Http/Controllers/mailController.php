<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send()
    {
    	Mail::send(['text'=>'mail'],['name','alvee'],function($message){
    		$message->to('dilware.cse@gmail.com','To hello')->subject('Test Email');
    		$message->from('dil.alam.cse@ulab.edu.bd','abcd');
    	});
    }
}
