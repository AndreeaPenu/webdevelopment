@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Extra informatie</div>

                    <div class="panel-body">



                            {{ csrf_field() }}
                            {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['UserController@update', $user->id]]) !!}


                            <div class="form-group">
                                {!! Form::label('address', 'Adres:') !!}
                                {!! Form::text('address', null, ['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('town', 'Woonplaats:') !!}
                                {!! Form::text('town', null, ['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Volgende', ['class'=>'btn btn-primary col-sm-6']) !!}
                            </div>
                            {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
