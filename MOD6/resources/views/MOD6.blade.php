<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOD6</title>
</head>
<body>
    <h2>Diandra Lintang Hanintya</h2>
    <h3>1301213072 - IF 45 05</h3>
    <table class="table table-hover" border="1">
        <tr align="center">
            <th>NO</th>
            <th>Name</th>
            <th>Age</th>
            <th>Degree</th>
        </tr>
        @foreach($students as $dm)
        <tr align="center">
            <td>{{$dm->id}}</td>
            <td>{{$dm -> name}}</td>
            <td>{{$dm -> age}}</td>
            <td>{{$dm -> degree}}</td>
        </tr>
        @endforeach
</body>
</html>

