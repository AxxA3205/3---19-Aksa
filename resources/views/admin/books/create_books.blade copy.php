@extends('layouts.app')
@section('title', 'AxxA | Data Buku')
@section('content')

<div class="header-mobile__bar">
<div class="container">
    <div class="title-top mb-5">
        <h2 class="fw-bold">Tambah Buku</h2>
    <form method="post" action="{{route('books.create')}}" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
        <label>Judul Buku</label>
        <input type="text" name="judul_buku" class="form-control"> 
    </div>
    <div class="form-group">
        <label>Pengarang</label>
        <input type="text" name="pengarang" class="form-control"> 
    </div>
    <div class="form-group">
        <label>Tahun Terbit</label>
        <input type="text" name="tahun_terbit" class="form-control"> 
    </div>
    <div class="form-group">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control"> 
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" name="file_path" class="form-control"> 
    </div>
    <br>  
      <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
</div>
@endsection