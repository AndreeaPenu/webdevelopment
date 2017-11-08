@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">




                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  <h1>Bedankt om je in te schrijven!</h1>


                        <class class="row">
                            Je kunt nu deelnemen aan de wedstrijd!
                            <a class="red" href={{url('/participations/create')}}>Voeg een foto toe</a>
                        </class>

                        <class class="row">
                            En andere deelnames bekijken
                            <a class="red" href={{url('/participations')}}>Bekijk en stem</a>
                        </class>

                        <hr>
                    @foreach($winners as $winner)
                        @if($current_date >= $contest->end)


                                <h3>Winnaar periode 1</h3>
                                <p>{{$winner->user->name}}</p>
                                <img height="100" src="{{$winner->photo->file}}" alt="">
                            @endif
                    @endforeach


                        @foreach($winners2 as $winner)
                            @if($current_date >= $contest2->end)
                                <h3>Winnaar periode 2</h3>
                                <p>{{$winner->user->name}}</p>
                                <img height="100" src="{{$winner->photo->file}}" alt="">
                            @endif
                        @endforeach


                        @foreach($winners3 as $winner)
                            @if($current_date >= $contest3->end)
                                <h3>Winnaar periode 3</h3>
                                <p>{{$winner->user->name}}</p>
                                <img height="100" src="{{$winner->photo->file}}" alt="">
                            @endif
                        @endforeach



                        @foreach($winners4 as $winner)
                            @if($current_date >= $contest4->end)
                                <h3>Winnaar periode 4</h3>
                                <p>{{$winner->user->name}}</p>
                                <img height="100" src="{{$winner->photo->file}}" alt="">
                            @endif
                        @endforeach


            
                        <div class="row">
                            <img class="mario" src="{{asset('images/original.png')}}" alt="mario">
                        </div>
            
                        



       </div>
    </div>
</div>
@endsection
