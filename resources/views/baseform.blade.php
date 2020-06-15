@extends('base')
@section('content')
@yield('imge')

<div class="box">
        <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            

                            <div class="col-md-10">
                                <input style="margin-left: 30px" placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-10">
                                <input style="margin-left: 30px" placeholder="Mot de passe" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" style="width: 250px; margin-left:-80px" class="btn btn-lg btn-success">
                                    {{ __('Se connecter') }}
                                </button>
                            </div>
                        </div>
                        <br>
                        @if(Route::current()->getName() == 'etudiant')
                        
                
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                               <a href="inscription"> <button type="button"  style="width: 250px; margin-left:-80px" class="btn btn-lg btn-primary">
                                    {{ __('Inscriver Vous') }}
                                </button>
                               </a>
                            </div>
                        </div>
                        @endif
                    </form>
                    <br>
                    <a class="link" href="/">Retourner a l'acceuil</a>
                </div>




@endsection