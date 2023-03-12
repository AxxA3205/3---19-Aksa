@extends('layouts.app')
@section('title', 'AxxA >>Data Buku<<') @section('content') <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container">
            <div class="title-top mb-5">
                <h2 class="fw-bold">Update Slider</h2>
                <form method="post" action="{{ route('slider.update', $slider->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{ $slider->judul }}">
                    </div>
                    <div class="form-group">
                    <label>Sub Judul</label>
                    <input type="text" name="subjudul" class="form-control" value="{{ $slider->subjudul }}">
        <div class="form-group">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control" value="{{ $slider->foto }}">
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
