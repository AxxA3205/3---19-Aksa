@extends('layouts.app')
@section('title', 'AxxA >>Data Buku<<')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                <div class="container">
    <div class="title-top mb-5">
        <h2 class="fw
        -bold">Update Buku</h2>
    <form method="post" action="{{route('books.update', $books->id)}}" enctype="multipart/form-data">
    {{ csrf_field() }}
      <div class="form-group">
        <label>Judul Buku</label>
        <input type="text" name="judul_buku" class="form-control" value="{{ $books->judul_buku }}"> 
    </div>
    <div class="form-group">
        <label>Pengarang</label>
        <input type="text" name="pengarang" class="form-control" value="{{ $books->pengarang }}"> 
    </div>
    <div class="form-group">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control" value="{{ $books->penerbit }}"> 
    </div>
    <div class="form-group">
        <label>Tahun Terbit</label>
        <input type="text" name="tahun_terbit" class="form-control" value="{{ $books->tahun_terbit }}"> 
    </div>
    <div class="form-group">
        <label>Gambar Buku</label>
        <input type="file" name="file_path" class="form-control" value="{{ $books->file_path }}"> 
    </div>
    <br>  
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Edit
        </div>
    </form>
</div>
                </div>
            </div>
@endsection