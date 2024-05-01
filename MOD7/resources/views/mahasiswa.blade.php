<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOD7</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <h2>Diandra Lintang Hanintya</h2>
    <h3>1301213072 - IF 45 05</h3>
    <a href="{{ route('mahasiswa.create') }}" class="btn" style="background-color: green; color: white;">Add New Mahasiswa</a>
    <table class="table table-hover" border="1">
        <tr align="center">
            <th>NO</th>
            <th>Name</th>
            <th>Age</th>
            <th>Degree</th>
            <th>Actions</th>
        </tr>
        @foreach($students as $dm)
        <tr align="center">
            <td>{{$dm->mahasiswa_id}}</td>
            <td>{{$dm->name}}</td>
            <td>{{$dm->age}}</td>
            <td>{{$dm->degree}}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', ['id' => $dm->mahasiswa_id]) }}" class="btn btn-primary">
                    <i class="material-icons">edit</i>
                </a>
                <form method="POST" action="{{ route('mahasiswa.destroy', ['id' => $dm->mahasiswa_id]) }}" onsubmit="return confirm('Are you sure you want to delete this Mahasiswa?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" id="delete-icon">
                        <i class="material-icons">delete_forever</i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
