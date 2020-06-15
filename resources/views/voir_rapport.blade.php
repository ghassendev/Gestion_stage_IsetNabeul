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
        <th scope="col">Rapport</th>
        <th scope="col">Status</th>
        <th scope="col">Espace admin</th>

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
        <td><a href="#">{{$rapport->chemin}}</a></td>
        <td>{{$rapport->status}}</td>
        <td><a href="/rapport/{{$rapport->id}}/edit">ICI</a></td>
      </tr>
      
      

  @endforeach

</tbody>
</table>
@endsection