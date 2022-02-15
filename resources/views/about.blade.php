@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3> {{ $nama }} </h3>
    <p> {{ $email }} </p>
    <img src="images/{{ $gambar }}" alt="{{ $nama }}" width="500px">
    <h2>My Curiculum Vitae</h2>
    <img src="images/{{ $cv }}" alt="{{ $nama }}" width="500px">

@endsection