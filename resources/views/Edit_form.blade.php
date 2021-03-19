<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Be-Interactive Venetië trip!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>


<div class="content">
   <div class="row">
     <div class="col-md-12">
       <div class="card card-user">
         <div class="card-header">
           <h5 class="card-title">Geef je op!</h5>
         </div>
        <div class="card-body">
           @if(Session::has('success'))
              <div class="alert alert-success">
        	    {{ Session::get('success') }}
               </div>
           @endif
           <form method="post" action= "update">
             {{csrf_field()}}
             <div class="row">
             <div class="col-md-12">
                 <div class="form-group">
                   <label> ID </label>
                   <input type="text" class="form-control @error('ID') is-invalid @enderror" placeholder="Voeg hier je ID toe" name="id">
                   @error('id')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
               <div class="col-md-12">
                 <div class="form-group">
                   <label> Naam </label>
                   <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Naam" name="name">
                   @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
             <div class="col-md-12">
               <div class="form-group">
                   <label> Email </label>
                   <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder='email' name="email">
                   @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>   
             <div class="col-md-12">
                <div class="form-group">
                   <label> Geboortedatum </label>
                   <input type="date" class="form-control @error('dateofbirth') is-invalid @enderror" placeholder="01-01-1900" name="dateofbirth">
                   @error('Geboortedatum')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
               <div class="col-md-12">
                <div class="form-group">
                   <label> Telefoonnummer </label>
                   <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Telefoonnummer" name="phone_number">
                   @error('phone_number')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
               <div class="col-md-12">
                <div class="form-group">
                   <label> Paspoortnummer </label>
                   <input type="number" class="form-control @error('passport') is-invalid @enderror" placeholder="123456789" name="passport">
                   @error('Paspoortnummer')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
               <div class="col-md-12">
                <div class="form-group">
                   <label> Ga je mee? </label>
                   <input type="hidden" name="goingwith" value="0">
                    <label class="switch">
                      <input type="checkbox" name="goingwith" value="1">
                      <span class="slider"></span>
                    </label>
                   @error('Ga je mee?')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
               <div class="col-md-12">
                <div class="form-group">
                   <label> Vliegangst? </label>
                      <select name="fearofflight" id="fearofflight">
                        <option value="Ja">Ja</option>
                        <option value="Nee">Nee</option>
                        <option value="Misschien">Misschien</option>
                      </select> 
                   @error('phone_number')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
              <div class="col-md-12">
                 <div class="form-group">
                   <label> Allergieën </label>
                   <textarea class="form-control textarea @error('allergies') is-invalid @enderror" placeholder="Vul hier in." name="allergies"></textarea>
                   @error('Allergieën?')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
              <div class="col-md-12">
                <div class="form-group">
                   <label> Reiswensen </label>
                   <textarea class="form-control textarea @error('travelwishes') is-invalid @enderror" placeholder="Nog extra wensen?" name="travelwishes"></textarea>
                   @error('message')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>

             </div>
             <div class="row">
              <div class="update ml-auto mr-auto">
                 <button type="submit" class="btn btn-primary btn-round">Wijzig!</button>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
</div>
</body>

</html>
