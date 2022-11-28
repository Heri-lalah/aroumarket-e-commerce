@extends('layouts.app')
@section('main')
<div class="container mt-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-10 col-lg-6 shadow p-5 text-center">
            <form action="" class="form-inline">
                <div class="form-group row g-4">
                    <input type="email" id="useremail" name="useremail" class="form-control" placeholder="Votre e-mail">
                    <textarea class="form-control" name="usermessage" placeholder="votre message" id="exampleFormControlTextarea1" rows="4"></textarea>
                    <button type="submit" class="fw-bold btn btn-outline-warning">Envoyer</button>
                  </div>
            </form>
        </div>
    </div>
</div>
@endsection
