@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Wedstrijd</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Winnaars</h1>

                    @foreach($winners as $winner)
                        @if($current_date >= $contest->end)
                                <h2>Winnaar periode 1</h2>
                        <p>{{$winner->user->name}}</p>
                                <img height="100" src="{{$winner->photo->file}}" alt="">
                            @endif
                    @endforeach


                        @foreach($winners2 as $winner)
                            @if($current_date >= $contest2->end)
                                <h2>Winnaar periode 2</h2>
                                <p>{{$winner->user->name}}</p>
                                <img height="100" src="{{$winner->photo->file}}" alt="">
                            @endif
                        @endforeach

                        @foreach($winners3 as $winner)
                            @if($current_date >= $contest3->end)
                                <h2>Winnaar periode 3</h2>
                                <p>{{$winner->user->name}}</p>
                                <img height="100" src="{{$winner->photo->file}}" alt="">
                            @endif
                        @endforeach

                        @foreach($winners4 as $winner)
                            @if($current_date >= $contest4->end)
                                <h2>Winnaar periode 4</h2>
                                <p>{{$winner->user->name}}</p>
                                <img height="100" src="{{$winner->photo->file}}" alt="">
                            @endif
                        @endforeach


                      <class class="row">Je kunt nu deelnemen aan de wedstrijd!
                          <a href={{url('/participations/create')}}>Voeg een foto toe</a>
                      </class>

                        <class class="row">
                            Andere deelnames
                            <a href={{url('/participations')}}>Bekijk en stem</a>
                        </class>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
