@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">







                            {{ csrf_field() }}
                            {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['UserController@update', $user->id], 'class'=>'form-signin']) !!}

                            <h2 class="form-signin-heading">Extra informatie</h2>

                        <div class="form-group">
                                {!! Form::label('address', 'Adres:',['class'=>'sr-only']) !!}
                                {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Adres'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('town', 'Woonplaats:',['class'=>'sr-only']) !!}
                                {!! Form::text('town', null, ['class'=>'form-control', 'placeholder'=>'Woonplaats'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Volgende', ['class'=>'btn btn-primary btn-block col-sm-6']) !!}
                            </div>
                            {!! Form::close() !!}




            </div>
        </div>
    </div>
@endsection
