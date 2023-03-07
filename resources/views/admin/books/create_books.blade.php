@extends('layouts.app')
@section('title', 'AxxA >>Data Buku<<')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                <div class="container">
    <div class="title-top mb-5">
        <h2 class="fw-bold">Tambah Buku</h2>
    <form method="post" action="{{route('books.store')}}" enctype="multipart/form-data">
      @csrf
      @method('POST')
      <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul_buku" class="form-control">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control">
    </div>
    <div class="form-group">
        <label>Pengarang</label>
        <input type="text" name="pengarang" class="form-control">
    </div>
    <div class="form-group">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control">
    </div>
    <div class="form-group">
        <label>Tahun Terbit</label>
        <input type="text" name="tahun_terbit" class="form-control">
    </div>
    <div class="form-group">
        <label>Cover</label>
        <input type="file" name="file_path" class="form-control">
    </div>
    <br>
      <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
                </div>
            </div>
@endsection
