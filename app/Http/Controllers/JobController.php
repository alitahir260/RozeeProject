<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailJob;


class JobController extends Controller
{
    public function EmailQueueJob()
    {
        // $details['email'] = 'alitahir@gmail.com';
        dispatch(new SendEmailJob());
        return redirect('ShowData')->with('message','Email Sent Succesfully');
    }
    public function SendEmail()
    {
        // $details['email'] = 'alitahir@gmail.com';
        dispatch(new SendEmailJob());
        return redirect('ShowData')->with('message','Email Sent Succesfully');
    }
}
