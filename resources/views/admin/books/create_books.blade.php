@extends('layouts.app')
@section('title', 'AxxA >>Data Buku<<') @section('content') <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container">
            <div class="title-top mb-5">
                <h2 class="title-1">Tambah Buku</h2>
                <form method="post" action="{{ route('buku.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    {{-- <div class="form-group mt-2">
                        <label>Judul</label>
                        <input type="text" name="judul_buku"
                            class="form-control @error('judul_buku')
                            is-invalid
                            @enderror"
                            name="judul_buku">
                        @error('judul_buku')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label>Deskripsi</label>
                        <textarea
                            class="form-control @error('deskripsi')
                            is-invalid
                            @enderror"
                            name="deskripsi"></textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label>Kategori</label>
                        <input type="text" name="kategori"
                            class="form-control @error('kategori')
                            is-invalid
                            @enderror"
                            name="kategori">
                            @error('kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                            @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label>Pengarang</label>
                        <input type="text" name="pengarang"
                            class="form-control @error('pengarang')
                            is-invalid
                            @enderror"
                            name="pengarang">
                            @error('pengarang')
                        <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                            @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label>Tahun Terbit</label>
                        <input type="text" name="tahun_terbit"
                            class="form-control @error('tahun_terbit')
                            is-invalid
                            @enderror"
                            name="tahun_terbit">
                            @error('tahun_terbit')
                        <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                            @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label>Cover</label>
                        <input type="file" name="file_path"
                            class="form-control @error('file_path')
                            is-invalid
                            @enderror"
                            name="file_path">
                            @error('file_path')
                        <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                            @enderror
                    </div> --}}

                    <div class="form-group mt-2">
                        <label>Judul</label>
                        <input type="text" name="judul_buku"
                            class="form-control @error('judul_buku')
                            is-invalid
                            @enderror"
                            name="judul_buku">
                            @error('judul_buku')
                        <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                            @enderror
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
                        <label>Penulis</label>
                        <input type="text" name="pengarang" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" class="form-control">
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
