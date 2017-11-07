@extends('layouts.app')

@section('content')


<div class="container">

<h1>Deelname</h1>



    <div class="row">
        {!! Form::open(['method'=>'POST', 'action'=> 'ParticipationsController@store', 'files'=>true]) !!}


        <div class="form-group">
            {!! Form::label('photo_id', 'Foto:') !!}
            {!! Form::file('photo_id', null,['class'=>'form-control btn btn-default'])!!}
        </div>


        <div class="form-group">
            {!! Form::submit('Neem deel', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

</div>
@endsection


