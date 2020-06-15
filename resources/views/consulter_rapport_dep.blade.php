@extends('base_home')

@section('main')

<a href="/rapport" class="btn btn-primary">Retourner</a>


<table class="table table-striped table-dark col-md-9 mt-2 ">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">CIN</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Niveau</th>
        <th scope="col">Branche</th>
        
        <th scope="col">Status</th>
        <th scope="col">Date_soutenance</th>
        <th scope="col">Note</th>
        

      </tr>
    </thead>
    <tbody>

@foreach ($rapports as $rapport)
    


      <tr>
       
        <th scope="row">{{$rapport->user->id}}</th>
        <td>{{$rapport->user->CIN}}</td>
        <td>{{$rapport->user->nom}}</td>
        <td>{{$rapport->user->prenom}}</td>
        <td>{{$rapport->user->niveau}}</td>
        <td>{{$rapport->user->branche}}</td>
        
        @if (($rapport->status)==='Validee')
        <td><p style="color:#10FF00">{{$rapport->status}}</p></td>  
    @elseif(($rapport->status)==='en attente')
        <td><p style="color:rgb(251, 255, 0)">{{$rapport->status}}</p></td>
    @elseif(($rapport->status)==='Non valide')
        <td><p style="color: #FF0000">{{$rapport->status}}</p></td>
    @endif    
    @if ($rapport->date_soutenance !=='2000-01-01')
                  
       <td><p style="color:rgb(251, 255, 0)">{{$rapport->date_soutenance}}</p></td>
    @else
        <td><p style="color:rgb(251, 255, 0)">Pas encore planifiee</p></td>

     @endif


     @if (($rapport->note)>15 )
   <td>  <p style=" font-style: italic;color: #10FF00">{{$rapport->note}} </p></td>
 @elseif (($rapport->note)>9 )
 <td><p style="font-style: italic;color: rgb(251, 255, 0)">{{$rapport->note}}</p></td>
 @elseif (($rapport->note)>-1 )
 <td><p style="font-style: italic;color: #FF0000">{{$rapport->note}}</p> </td>
 @elseif (($rapport->note)==-1 )
 <td><p style="font-style: italic;color: rgb(78, 50, 238)">Pas encore </p></td>
@endif



        
        
      </tr>
      
      

  @endforeach

</tbody>
</table>
@endsection