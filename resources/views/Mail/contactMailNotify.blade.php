<h1>Bonjour, vous avez une nouvelle message de la part de {{Str::ucfirst(Auth::user()->name)}}</h1>
<strong class="text-primary">Email : </strong>{{ $data->email }} <br>
<strong class="text-primary">Objet : </strong>{{ $data->subject }} <br>
<strong class="text-primary">Message : </strong>{{ $data->message }} <br>
