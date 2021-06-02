@extends('layouts.master')

@section('content')

@foreach ($students as $student)
<ul>
    <li>Nama : {{ $student->nama }}</li>
    <li>NIM : {{ $student->nim }}</li>
    <li>Gender : {{ $student->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</li>
    <li>Alamat : {{ $student->alamat }}</li>
</ul>
@endforeach

@endsection
