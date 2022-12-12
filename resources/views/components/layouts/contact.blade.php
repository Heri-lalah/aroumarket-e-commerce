@extends('layouts.app')
@section('header')
    @vite(['resources/css/redirectMessage.css', 'resources/js/redirectMessage.js'])
@endsection
@section('main')
<div class="container mt-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-10 col-lg-6 shadow p-5 text-center">
            <form action="{{route('contact.us.store')}}" method="POST" class="form-inline">
                @csrf
                <div class="form-group row g-4">
                    <input type="email" id="useremail" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Votre e-mail">
                    <input type="text" name="subject" placeholder="motif" class="form-control @error('subject') is-invalid @enderror">
                    <textarea class="form-control @error('message') is-invalid @enderror"  name="message" placeholder="votre message" id="exampleFormControlTextarea1" rows="4"></textarea>
                    <button type="submit" class="fw-bold btn btn-outline-warning">Envoyer</button>
                  </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10 col-lg-6 bg-danger">
            @if(session('success'))
                <div id="redirectmsg" class="bg-success text-white">{{ session('success') }}</div>
            @endif

            @if(session('error'))
                <div  id="redirectmsg" class="bg-danger text-white">{{ session('error') }}</div>
            @endif
        </div>
    </div>
</div>
@endsection
