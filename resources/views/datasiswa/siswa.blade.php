<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>

<body>

    @extends('layout1')

    @section('konten')
        
   
    {{-- <ul>
        <li><a href="/">Halaman Utama</a></li>
        <li><a href="contact">Hubungi Saya</a></li>
        <li><a href="about">Tentang Saya</a></li>
        <li><a href="siswa">Data Siswa</a></li>
    </ul> --}}

    <h1>Daftar Siswa :</h1>

    @foreach ($siswa as $siswa)
        <li>{{ $siswa }}</li>
    @endforeach
    @endsection


</body>

</html>
