<?php

namespace App\Http\Controllers;

use App\Mail\welcomeMail as MailWelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class welcomeMail extends Controller
{
    public function index(){
    Mail::to('radymohamed@gmail.com')->send(new MailWelcomeMail);
    }
}
