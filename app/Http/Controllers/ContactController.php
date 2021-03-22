<?php namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use DB;

class ContactController extends Controller
{

    public function getContact()
    {

        return view('contact_us');
    }

    public function editContact(Contact $contact)
    {
        return $contact;
        return view('edit_form');
    }

    public function saveContact(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'dateofbirth' => 'required',
            'phone_number' => 'required',
            'passport' => 'required',
        ]);
 
        $contact = new Contact;
        // All required data from form.
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
        // E-mail function with relevant data.
        \Mail::send('contact_email',
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
             $message->to('be.interactiveopdracht@gmail.com');
        });
        // E-mail function with relevant data and edit link.
        \Mail::send('confirmation_email',
          array(
              'id' => $contact->id,
              'name' => $request->name,
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

        return back()->with('success', 'Bedankt voor het doorgeven!')->withInput();

    }


}

