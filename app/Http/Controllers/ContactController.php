<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactDefault;

class ContactController extends Controller
{
    public function sendContact(Request $params)
    {
        Notification::route('mail', config('app.mail.attendance_address'))
        ->notify(new \App\Notifications\ContactDefault($params));

        return response()->json(['status' => 'success']);
    }
}
