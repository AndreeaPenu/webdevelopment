@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Participations <a class="btn btn-default" href={{url('/participations/create')}}>Voeg een foto toe</a></h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Eigenaar</th>
            <th>Foto</th>
            <th>Datum inzending</th>
            <th>Aantal likes</th>
            <th></th>
        </thead>
        <tbody>
        @if($participations)
            <tr>
                @foreach($participations as $participation)

                    @if($contest->begin <= $participation->created_at && $contest->end >= $participation->created_at)
                        {!! Form::open(array('method'=>'post','class'=>$participation->id,
         'action'=>'ParticipationsController@like')) !!}

                        <td>{{$participation->id}}</td>
                        <td>{{$participation->user->name}}</td>
                        <td><img height="100" src="{{$participation->photo->file}}" alt=""></td>
                        <td>{{$participation->created_at}}</td>
                        <td>{{$participation->likes->count()}}</td>
                    @if(Auth::user()->has_voted==0 && (Auth::user()->id != $participation->user->id))
                       <td> {!! Form::submit('Like',array('class'=>'btn btn-primary like','id'=>$participation->id)) !!}</td>
                        @endif
                    @endif
                    {!! Form::close() !!}


            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>

@endsection




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="{{ asset('js/custom.js') }}"></script>