@extends('base_home')

@section('main')
    

<img class="log-img" src="img/etud.svg"  alt="">


<div class="nom">
Bienvenue  {{Auth::user()->prenom}} 
</div>
<div class="depo">
<h3>Déposer votre Rapport ici  :</h3>
<a href="rapport/create"><img src="img/publish.svg" alt="" style="width: 60px"></a>
</div>

<div class="right">
    
    @if(isset($rapport))
        @if (($rapport->status)==='Validee')
            <h1>ETAT DE RAPPORT:<br><p style="color:#10FF00">{{$rapport->status}}</p></h1>  
        @elseif(($rapport->status)==='en attente')
            <h1>ETAT DE RAPPORT:<br><p style="color:rgb(251, 255, 0)">{{$rapport->status}}</p></h1>
        @elseif(($rapport->status)==='Non valide')
            <h1>ETAT DE RAPPORT:<br><p style="color: #FF0000">{{$rapport->status}}</p></h1>
        @endif    
    
            <hr ><hr><hr>
            <h3>Date de soutenance:<br><br>
              @if ($rapport->date_soutenance !=='2000-01-01')
                  
               <p style="color:rgb(251, 255, 0)">{{$rapport->date_soutenance}}</p></h3>
            @else
            <p style="color:rgb(251, 255, 0)">Pas encore planifiee</p></h3>

                @endif

    @else
        <h1>ETAT DE RAPPORT:</h1> 
        <hr ><hr><hr>
        <h3>Date de soutenance:</h3>
    @endif
</div>
<div class="note">
    @if(isset($rapport))
        @if (($rapport->note)>15 )
            <h1 style="font-style: italic">Votre Note: <br><p style="color: #10FF00">{{$rapport->note}}</p> </h1>
        @elseif (($rapport->note)>9 )
            <h1 style="font-style: italic">Votre Note: <br><p style="color: rgb(251, 255, 0)">{{$rapport->note}}</p> </h1>
        @elseif (($rapport->note)>-1 )
            <h1 style="font-style: italic">Votre Note: <br><p style="color: #FF0000">{{$rapport->note}}</p> </h1>
        @elseif (($rapport->note)==-1 )
        <h1 style="font-style: italic">Votre Note: <br><p style="color: rgb(78, 50, 238)">Pas encore</p> </h1>
@endif
    
    @else
        <h1 style="font-style: italic">Votre Note:</h1>
    
</div>
@endif
@endsection