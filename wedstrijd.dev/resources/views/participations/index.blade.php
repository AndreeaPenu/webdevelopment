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
            <td>{{$participation->id}}</td>
            <td>{{$participation->user->name}}</td>
           <td> <img height="100" src="{{$participation->photo->file}}" alt=""></td>
            <td>{{$participation->created_at->diffForhumans()}}</td>


    </tr>
        @endforeach
    @endif


    </tbody>
</table>