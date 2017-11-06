<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<div class="container">
    <h1>Participations</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Eigenaar</th>
            <th>Foto</th>
            <th>Datum inzending</th>
        </thead>
        <tbody>
        @if($participations)
            <tr>
                @foreach($participations as $participation)




                    {!! Form::open(array('method'=>'post','class'=>$participation->id,
     'action'=>'ParticipationsController@like')) !!}
                    {!! Form::hidden('participationId', $participation->id) !!}

                    <td>{{$participation->id}}</td>
                    <td>{{$participation->user->name}}</td>
                    <td><img height="100" src="{{$participation->photo->file}}" alt=""></td>
                    <td>{{$participation->created_at}}</td>

                    {!! Form::submit('Like',array('class'=>'btn btn-primary like','id'=>$participation->id)) !!}
                    {{--{!!$images->likes!!}--}}

                    {!! Form::close() !!}


            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>

</body>


</html>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="{{ asset('js/custom.js') }}"></script>