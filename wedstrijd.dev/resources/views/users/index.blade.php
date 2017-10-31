<h1>Users</h1>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Naam</th>
            <th>Email</th>
            <th></th>
        </tr>
    <tbody>

    @if($users)

        @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
            
        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE" />
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
            <button>Delete</button>
        </form>

        </td>
    </tr>
    @endforeach
        @endif
    </tbody>

    </thead>
</table>