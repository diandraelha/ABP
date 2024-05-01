<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Form</title>
</head>
<body>
    <h2>Mahasiswa Form</h2>
    <form method="POST" action="{{ isset($mahasiswa) ? route('mahasiswa.update', $mahasiswa->mahasiswa_id) : route('mahasiswa.store') }}">
        @csrf
        @if(isset($mahasiswa))
            @method('PUT')
        @endif
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ isset($mahasiswa) ? $mahasiswa->name : '' }}"><br>
        <label for="age">Age:</label><br>
        <input type="text" id="age" name="age" value="{{ isset($mahasiswa) ? $mahasiswa->age : '' }}"><br>
        <label for="degree">Degree:</label><br>
        <input type="text" id="degree" name="degree" value="{{ isset($mahasiswa) ? $mahasiswa->degree : '' }}"><br><br>
        <button type="submit">{{ isset($mahasiswa) ? 'Update' : 'Create' }}</button>
    </form>
</body>
</html>
