@extends('layouts.app')
@section('title', 'AxxA >>Data Slider<<') @section('content') <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container">
            <div class="title-top mb-5">
                <h2 class="title-1">Tambah Slider</h2>
                <form method="post" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                        <div class="form-group mt-2">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Sub Judul</label>
                            <input type="text" name="subjudul" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Kirim</button>

                </form>
            </div>
        </div>
    </div>
@endsection
