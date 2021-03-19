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
            'name' => 'required',
            'email' => 'required|email',
            'dateofbirth' => 'required',
            'phone_number' => 'required',
            'passport' => 'required',
        ]);

        $contact = Contact::where('email', $request->email)->first();

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

    }
}
