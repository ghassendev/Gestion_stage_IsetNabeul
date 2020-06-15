@extends('base_home')

@section('main')


<a href="/rapport/voir" class="btn btn-primary mb-2">Retourner</a>


<div class="table table-dark">
<h1 style="margin-left:350px">Deposer données</h1>
<br>
<tbody>
    {!! Form::open(['action' => ['RapportsController@update', $rapport->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        <th scope="row">CIN</th>
        <td> {{Form::text('CIN', $rapport->user->CIN, ['class'=>'col-6 ', 'placeholder' => 'CIN', 'disabled'])}}</td>
    </div>   
    <div class="form-group">
            <th scope="row">Nom</th>
            <td> {{Form::text('nom', $rapport->user->nom, ['class'=>'col-6 ', 'placeholder' => 'nom', 'disabled'])}}</td>
        </div>
        <div class="form-group">
            <th scope="row">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Prenom</th>
            <td> {{Form::text('prenom', $rapport->user->prenom, ['class'=>'col-6 ', 'placeholder' => 'prenom', 'disabled'])}}</td>
        </div>

        <div class="form-group">
                <th scope="row" >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Date de soutenance</th>
            <td>{{Form::date('date_soutenance', $rapport->date_soutenance, ['class'=>'form-control col-4','style'=>'margin-left: 230px' ,'placeholder' => 'date_soutenance' ])}}</td>
        </div>



        <div class="form-group" style="margin-left: 230px">
            <th scope="row" > Validation</th>
            <td>{{Form::select('status', array('en attente' => 'en attente', 'Validee' => 'Validee', 'Non valide' => 'Non valide'), 'en attente', ['class'=>'form-control col-4 custom-select' ] )}}</td>
        </div>
        <div class="form-group" style="margin-left: 230px">
            <th scope="row" > Note</th>
            <td>{{Form::number('note', $rapport->note, ['class'=>'form-control col-4', 'placeholder' => 'note' ])}}</td>
        </div>
        
    
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Déposer', ['class'=>'btn btn-lg btn-primary form-control col-4 ','style'=>'margin-left: 230px'])}}
    {!! Form::close() !!}
    <br><br>
</div>
</table>
@endsection