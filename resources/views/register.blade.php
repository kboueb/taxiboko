@extends('layouts.app')
@section('content')
<section class="container-fluid justify-center text-light" style="background-image:url({{ asset('images/bg-login.jpg') }}); width:100vw; height:100vh; background-size:cover">
    <div class="container justify-center mt-5">
        <div class="workinghny-form-grid">
            <div class="main-hotair">
                <div class="col-md-5">
                    <h2>Créer un compte Passager</h2>
                    <form action="/register/traitement" method="POST" class="signin-form">
                    @csrf    
                    <div class="form-group mb-2">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" class="form-control text" name="nom" placeholder="Nom" required autocomplete="off">
					</div>
					<div class="form-group mb-2">
						<span class="fa fa-key" aria-hidden="true"></span>
						<input class="form-control text" type="text" name="prenom" placeholder="Prenom" required autocomplete="off">
					</div>
					<div class="form-group mb-2">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" class="form-control text" name="email" placeholder="Email" required autocomplete="off">
					</div>
					<div class="form-group mb-2">
						<span class="fa fa-key" aria-hidden="true"></span>
						<input class="form-control text" type="text" name="telephone" placeholder="Telephone" required autocomplete="off">
					</div>
					<div class="form-group mb-2">
						<span class="fa fa-key" aria-hidden="true"></span>
						<input class="form-control text" type="password" name="password" placeholder="Mot de passe min 8 caractères" required autocomplete="off">
					</div>
					{{-- <div class="form-group mb-2">
						<label class="anim">
							<input type="checkbox" class="checkbox">
							<span> Se souvenir de moi ?</span> 
						</label>
						<br>
						<a href="#"> Mot de passe oublié?</a> 
						</ul>
						<div class="clear"> </div>
					</div> --}}
					<div class="form-group mb-2">
						<button class="btn btn-warning text-light" type="submit">Enregistrer</button>
					</div>
                    </form>
                    @if(session('message'))
                        <div class="col-md-12 m-0">
                            <div class="card">
                                <a href="/register" class="alert alert-success"> {{ session('message') }} </a>
                            </div>
                        </div>
                    @endif
                    <p class="account">Vous êtes déjà un membre ? <a href="/login">Se connecter</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
