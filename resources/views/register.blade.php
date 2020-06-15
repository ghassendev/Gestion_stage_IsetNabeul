@extends('base')

@section('content')
<br>
<img class="reg-img" src="img\etud.svg" alt="">
                <div class="box-1">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h2 style="margin-left:-10px ;margin-bottom:15px; margin-top:10px;">Fiche d'inscription</h2>
                        
                        <div class="form-group row">
                                                

                            <div class="col-md-10">
                                <input id="prenom" placeholder="Prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            

                            <div class="col-md-10">
                                <input id="nom" type="text" placeholder="Nom" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-10">
                                <input id="CIN" type="number" placeholder="CIN" class="form-control @error('CIN') is-invalid @enderror" name="CIN" value="{{ old('CIN') }}" required autocomplete="CIN" autofocus>

                                @error('CIN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            

                            <div class="col-md-10">
                                <select id="Niveau"   class="form-control @error('Niveau') is-invalid @enderror" name="Niveau" value="{{ old('Niveau') }}" required autocomplete="Niveau" autofocus>

                                    <option value="">Select Niveau</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>  
                                @error('Niveau')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                           

                            <div class="col-md-10">
                                <select id="branche"  class="form-control @error('branche') is-invalid @enderror" name="branche" value="{{ old('branche') }}" required autocomplete="branche" autofocus>
                                        
                                        <option value="">Select branche</option>
                                        <option value="TI">TI</option>
                                        <option value="DSI">DSI</option>
                                        <option value="SEM">SEM</option>
                                        <option value="RES">RES</option>
                                      </select>  
                                @error('branche')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        


                        <div class="form-group row">
                            

                            <div class="col-md-10">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-10">
                                <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           

                            <div class="col-md-10">
                                <input id="password-confirm" placeholder="Confirm Mot de passe" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-4" >
                                <button style="width: 250px; margin-left:-110px" type="submit" class="btn btn-lg btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
