@extends('base_home')
@section('main')
    

<img class="log-img" src="img/dep.svg"  alt="">
<div class="nom">
    Bienvenue  {{Auth::user()->prenom}} 
    </div>
    <br>
  


    <br><br>
    <div class="depar">
      <a href="rapport/consulter_dep" style="text-decoration: none;color:white">  <h1 >Consulter les donnees</h1></a>
    </div>
</div>
@endsection