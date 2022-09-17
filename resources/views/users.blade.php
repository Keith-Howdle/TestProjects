<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Users</title>
    </head>
    <body>
        <h1>Users CRUD APP</h1>

        <div class="row">

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </table>



        {{-- @foreach($user as $row)
            {{ $row->name }}
            {{ $row->email }}
            <br>
        @endforeach

        <table border="1">
            <thead>
                <th>Name</th>
                <th>Email</th>
            </thead>
            @foreach($user as $row)
                <tr>
                    <td>
                        {{ $row->name }}
                    </td>
                    <td>
                        {{ $row->email }}
                    </td>
                </tr>
            @endforeach
        </table> --}}
    </body>
</html>
