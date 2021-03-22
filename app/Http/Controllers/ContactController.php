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
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->dateofbirth = $request->get('dateofbirth');
        $contact->phone_number = $request->get('phone_number');
        $contact->passport = $request->get('passport');
        $contact->goingwith = $request->get('goingwith');
        $contact->fearofflight = $request->get('fearofflight');
        $contact->allergies = $request->get('allergies');
        $contact->travelwishes = $request->get('travelwishes');
        $contact->save();

        // E-mail function with relevant data.
        \Mail::send('contact_email',
            compact('contact'), function ($message) use ($contact) {
                $message->from('noreply@be-interactive.nl');
                $message->to('be.interactiveopdracht@gmail.com');
            });

        // E-mail function with relevant data and edit link.
        \Mail::send('confirmation_email',
            compact('contact'), function ($message) use ($contact) {
                $message->from('noreply@be-interactive.nl');
                $message->to($contact->email);
            });

        return back()->with('success', 'Bedankt voor het doorgeven!')->withInput();

    }


}

