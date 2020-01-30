<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><center>Daftar Siswa Abadi</center></h1>
    @foreach ($data as $index => $value)
        Nama : {{$value ['nama']}}<br>
        Kelas : {{$value ['kelas']}}
        <hr>
    @endforeach
</body>
</html>
