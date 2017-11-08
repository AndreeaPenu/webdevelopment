@extends('layouts.app')

@section('content')
    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Deelnames</h1>
                <p class="lead text-muted">Stem op je favoriete tekening & doe zelf mee!</p>
                <p>
                    <a href="{{url('/participations/create')}}" class="btn btn-primary">Voeg een foto toe</a>
                </p>
            </div>
        </section>


<div class="album text-muted">
    <div class="container">

        <div class="row">
            @if($participations)

                    @foreach($participations as $participation)

                        @if($contest->begin <= $participation->created_at && $contest->end >= $participation->created_at)
                            {!! Form::open(array('method'=>'post','class'=>$participation->id,
             'action'=>'ParticipationsController@like')) !!}

            <div class="card">
                <img src="{{$participation->photo->file}}" alt="">
                <p class="black">{{$participation->user->name}} |  Stemmen: {{$participation->likes->count()}}</p>

                @if(Auth::user()->has_voted==0 && (Auth::user()->id != $participation->user->id))
                     {!! Form::submit('Stem',array('class'=>'btn btn-primary like','id'=>$participation->id)) !!}
                @endif
                @endif
            </div>
                        {!! Form::close() !!}
                        @endforeach
                    @endif

        </div>

    </div>
</div>
    </main>
@endsection




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="{{ asset('js/custom.js') }}"></script>