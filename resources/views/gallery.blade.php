@extends('layouts.main')

@section('container')
    <h1>Halaman Gallery</h1>
    <h3>1. Collectible Box Blackpink</h3>
    <img src="images/{{ $cb }}" alt="{{ $cb }}" width="500px">
    <h3>2. Hot Pot Mie Ayam</h3>
    <img src="images/{{ $hotpot }}" alt="{{ $hotpot }}" width="500px">
    <h3>3. Casing HP Blackpink</h3>
    <img src="images/{{ $Casing }}" alt="{{ $Casing }}" width="500px">
    <h3>4. Logo E-Commerce Application</h3>
    <img src="images/{{ $JOY }}" alt="{{ $JOY }}" width="500px">
    <h3>5. Poster Photoshop</h3>
    <img src="images/{{ $poster }}" alt="{{ $poster }}" width="500px">
    <h3>6. Poster PHBS</h3>
    <img src="images/{{ $PHBS }}" alt="{{ $PHBS }}" width="500px">
    <h3>7. Virtual Background </h3>
    <img src="images/{{ $lnp }}" alt="{{ $lnp }}" width="500px">
    <h3>8. Blackpink & Me Photoshop Manipulation</h3>
    <img src="images/{{ $bp }}" alt="{{ $bp }}" width="500px">

@endsection