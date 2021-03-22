<h2>Hallo Admin,</h2><br><br>
Er is een aanmelding ontvangen van : {{ $contact->name }}<br><br>
Hier zijn de details:<br><br>
<b>ID:</b> {{ $contact->id }}<br><br>
<b>Naam:</b> {{ $contact->name }}<br><br>
<b>Email:</b> {{ $contact->email }}<br><br>
<b>Geboortedatum:</b> {{ $contact->dateofbirth }}<br><br>
<b>Telefoonnummer:</b> {{ $contact->phone_number }}<br><br>
<b>Paspoortnummer:</b> {{ $contact->passport }}<br><br>
<b>Gaat mee?:</b> {{ $contact->goingwith }}<br><br>
<b>Vliegangst?:</b> {{ $contact->fearofflight }}<br><br>
<b>Allergieën?:</b> {{ $contact->allergies }}<br><br>
<b>Reiswensen:</b> {{ $contact->travelwishes }}<br><br>
