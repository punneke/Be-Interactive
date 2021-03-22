<h2>Beste vakantieganger,</h2><br><br>
We hebben jouw wijziging ontvangen!<br><br>
Hier zijn de details:<br><br>
<b>Naam:</b> {{ $contact->name }}<br><br>
<b>Email:</b> {{ $contact->email }}<br><br>
<b>Geboortedatum:</b> {{ $contact->dateofbirth }}<br><br>
<b>Telefoonnummer:</b> {{ $contact->phone_number }}<br><br>
<b>Paspoortnummer:</b> {{ $contact->passport }}<br><br>
<b>Gaat mee?:</b> {{ $contact->goingwith }}<br><br>
<b>Vliegangst?:</b> {{ $contact->fearofflight }}<br><br>
<b>Allergieën?:</b> {{ $contact->allergies }}<br><br>
<b>Reiswensen:</b> {{ $contact->travelwishes }}<br><br>

Mocht je deze nog willen wijzigen, klik dan op de onderstaande link: <br><br>

<a href='{{ route('contact-us-tokenized', ['contact' => $contact]) }}'><button>Wijzig je gegevens!</button></a>
