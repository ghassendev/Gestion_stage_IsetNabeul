@extends('base_home')
@section('main')
    

<img class="log-img" src="img/chef.svg"  alt="">
<div class="nom">
    Bienvenue  {{Auth::user()->prenom}} 
    </div>
    <br>
    <div class="depar">
       <a href="rapport/voir" style="text-decoration: none; color:white"> <h1 >Déposer les donnees</h1></a>
    </div>


    <br><br>
    <div class="depar">
      <a href="rapport/consulter" style="text-decoration: none;color:white">  <h1 >Consulter les donnees</h1></a>
    </div>
</div>
@endsection