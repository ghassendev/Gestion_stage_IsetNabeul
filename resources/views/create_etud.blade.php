@extends('base')


@section('content')
    

<div class="up">
    <h1>Déposer votre rapport</h1>
    {!! Form::open(['action' => 'RapportsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <br>
    <div class="op" style="margin-bottom: 500px">
        <div class="form-group">
            {{Form::file('chemin',['class'=>'form-control-file','style'=>'margin-left: 300px'])}}
        </div>
        <br>
        {{Form::submit('Envoyer', ['class'=>'col-6 btn btn-lg btn-primary'])}}
    
    </div>
        {!! Form::close() !!}
    <br>
<a href="\rapport" style="text-decoration: none;font-size:18px;margin-left:350px;">Retourner a l'acceuil</a>
</div>

@endsection