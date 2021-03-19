<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use App\Models\ContactModel;
use App\Models\Contact;
use App\Models\User;
use App\Contacts;
use DB;

class UpdateContact extends Controller
{
    function update(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'dateofbirth' => 'required',
            'phone_number' => 'required',
            'passport' => 'required',
        ]);

        $contact = Contact::where('id', $request->id)->first();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->dateofbirth = $request->dateofbirth;
        $contact->phone_number = $request->phone_number;
        $contact->passport = $request->passport;
        $contact->goingwith = $request->goingwith;
        $contact->fearofflight = $request->fearofflight;
        $contact->allergies = $request->allergies;
        $contact->travelwishes = $request->travelwishes;

        $contact->save();

        $id = $contact->id;

        \Mail::send('confirmation_email',
        array(
            'id' => $contact->id,
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'dateofbirth' => $request->get('dateofbirth'),
            'phone_number' => $request->get('phone_number'),
            'passport' => $request->get('passport'),
            'goingwith' => $request->get('goingwith'),
            'fearofflight' => $request->get('fearofflight'),
            'allergies' => $request->get('allergies'),
            'travelwishes' => $request->get('travelwishes'),


        ), function($message) use ($request)
          {
             $message->from($request->email);
             $message->to($request->email);
          });

      return back()->with('success', 'Bedankt voor het doorgeven!');



    }
}
