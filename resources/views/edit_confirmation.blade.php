<h2>Beste vakantieganger,</h2><br><br>
We hebben jouw wijziging ontvangen!<br><br>
Hier zijn de details:<br><br>
<b>Naam:</b> {{ $name }}<br><br>
<b>Email:</b> {{ $email }}<br><br>
<b>Geboortedatum:</b> {{ $dateofbirth }}<br><br>
<b>Telefoonnummer:</b> {{ $phone_number }}<br><br>
<b>Paspoortnummer:</b> {{ $passport }}<br><br>
<b>Gaat mee?:</b> {{ $goingwith }}<br><br>
<b>Vliegangst?:</b> {{ $fearofflight }}<br><br>
<b>Allergieën?:</b> {{ $allergies }}<br><br>
<b>Reiswensen:</b> {{ $travelwishes }}<br><br>

Mocht je deze nog willen wijzigen, klik dan op de onderstaande link en voer het volgende ID code bij het formulier in: <b> {{ $id }} </b><br><br>

<a href='{{ route('contact-us-tokenized', ['token' => $id]) }}'><button>Wijzig je gegevens!</button></a>
