<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailNotify;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Throwable;

class MailController extends Controller
{
    public function contactMessage(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        try {

            $mail = Mail::to(config('mail.from.address'))->send(new ContactMailNotify($request));

            $request->merge(['user_id' => \auth()->user()->id]);

            Contact::firstOrCreate(\collect($request)->except('_token')->toArray());


        }catch (Throwable $th){
            dd($th);
            return \redirect()->back()->with(['error' => 'Message non envoyé, réessayez...']);

        }

        return redirect()->back()
            ->with(['success' => 'Message bien envoyé.']);
    }
}
