<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Tabungan</center>
    @foreach ($tabungan as $val)
        Nis : {{$val->nis}}<br>
        Nama : {{$val->Nama}}<br>
        Kelas : {{$val->kelas}}<br>
        Jumlah : {{$val->jml}}<br>
        @if ($val->$jml >=50000)
            Jenis Paket : Paket A
        @elseif ($val->$jml >=25000)
            Jenis Paket : Paket B
        @elseif($val->$jml >=10000)
            Jenis Paket : Paket C
        @else
            Jenis Paket : -
        @endif

        <hr>
    @endforeach
</body>
</html>
