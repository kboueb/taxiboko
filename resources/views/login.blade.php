@extends('layouts.app')
@section('content')
<section class="container-fluid justify-center text-light" style="background-image:url({{ asset('images/bg-login.jpg') }}); width:100vw; height:100vh; background-size:cover">
    <div class="container justify-center mt-5">
        <div class="workinghny-form-grid">
            <div class="main-hotair">
                <div class="col-md-5">
                    <h2>Connexion au profil Passager</h2>
                    <form action="/login/traitement" method="POST">
                    @csrf    
                    <div class="form-group mb-2">
                        <input type="text" class="form-control text" name="email" placeholder="email" required autocomplete="off">
                    </div>
                    <div class="form-group mb-2">
                        <input class="form-control text" type="password" class="password" name="password" placeholder="Mot de passe" required autocomplete="off">
                    </div>
                    <div class="form-group mb-2">
                        <button class="btn btn-warning text-light" type="submit">Se connecter</button>
                    </div>
                    </form>
                    @if(session('message'))
                        <div class="col-md-12 m-0">
                            <div class="card">
                                <a href="/login" class="alert alert-danger justify-content"> {{ session('message') }} </a>
                            </div>
                        </div>
                    @endif	
                    <p>Se connecter en tant que <span class="account"> <a href="/login-driver">Chauffeur</a> </span></p>
                    <p class="account">N'êtes vous pas un membre? <a href="/register">Créer un compte</a></p>
                </div>
                <div class="w3l_form align-self">
                    <div class="left_grid_info">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
    
