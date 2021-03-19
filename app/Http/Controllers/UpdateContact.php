<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use App\Models\ContactModel;
use App\Models\Contact;
use DB;

class UpdateContact extends Controller
{
    function update(Request $request)
    {
        // ContactModel::where('id', 1)
        // ->update(['name'=>$request->name]);
        // ->update(['email'=>$request->email]);
        // ->update(['dateofbirth'=>$request->dateofbirth]);
        // ->update(['phone_number'=>$request->phone_number]);
        // ->update(['passport'=>$request->passport]);
        // ->update(['goingwith'=>$request->goingwith]);
        // ->update(['fearofflight'=>$request->fearofflight]);
        // ->update(['allergies'=>$request->allergies]);
        // ->update(['travelwishes'=>$request->travelwishes]);

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'dateofbirth' => 'required',
            'phone_number' => 'required',
            'passport' => 'required',
        ]);
 
        $contact = Contact::find($request->id);

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
