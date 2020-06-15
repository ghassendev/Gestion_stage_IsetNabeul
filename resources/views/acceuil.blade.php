@extends('base')
@section('content')
    

<div class="titre">
<h1 >Bienvenue a ISET Nabeul </h1>
<h2>S'il Vous Plait choisissez Que vous êtes :</h2>
</div>
<br>
<div class="main">
    <div class="etud">
        <img class="mg-etud" src="img/etud.svg" >
        <a href="etudiant_login"><div class="blok">
            <h2>Etudiant</h2>
        </div></a>
    </div>
    <div class="chef">
        <img class="mg-chef" src="img/chef.svg" >
        <a href="chef_login"><div class="blok">
            <h2>Chef département</h2>
        </div></a>
    </div>
    <div class="dep">
        <img class="mg-dep" src="img/dep.svg" >
        <a href="dep_login"><div class="blok">
            <h2>Direction</h2>
        </div></a>
    </div>

</div>
@endsection