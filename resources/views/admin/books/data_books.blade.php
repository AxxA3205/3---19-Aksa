@extends('layouts.app')
@section('title', 'AxxA >>Data Buku<<') @section('content') <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Data Buku</h2>
                        <a href="/exportpdf"><button class="btn btn-success" type="submit">Export Data</button></a>
                    </div>
                </div>
            </div>

            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th nowrap>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th nowrap>Tahun Terbit</th>
                                    <th nowrap>Cover</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $index => $book)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td nowrap>{{ $book->judul_buku }}</td>
                                        <td>{{ $book->deskripsi }}</td>
                                        <td>{{ $book->kategori }}</td>
                                        <td nowrap>{{ $book->pengarang }}</td>
                                        <td nowrap>{{ $book->penerbit }}</td>
                                        <td>{{ $book->tahun_terbit }}</td>
                                        <td><img src="{{ asset('uploads/' . $book->file_path) }}" /></td>
                                        <td nowrap>
                                            <a href="{{ route('books.edit', $book->id) }}"><i class="fas fa-edit"></i>
                                            </a>
                                            |
                                            <a href="{{ route('books.destroy', $book->id) }}"><i class="fas fa-trash"
                                                    style="color:red"></i> </a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $books->links() }}
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
