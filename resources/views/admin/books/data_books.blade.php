@extends('layouts.app')
@section('title', 'AxxA >>Data Buku<<') @section('content') <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Data Buku</h2>

                    </div>
                    <div class="overview-wrap">
                        <div class="row g-3 align-items-center mt-2">
                            <div class="col-auto">
                                <div class="d-flex flex-row">
                                    <div class="p-0">
                                        <form action="{{route('buku.index')}}" method="GET">
                                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search">
                                            {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
                                    </div>
                                    <div class="p-0">
                                        <div class="col-2">
                                            <button class="btn btn-outline-success" type="submit">Search</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div>
                        <a href="/exportexcel"><button class="btn btn-success" type="submit">Export Excel</button></a>
                        <a href="/exportpdf"><button class="btn btn-danger" type="submit">Export PDF</button></a>
                    </div>
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
                                            <a href="{{ route('buku.edit', $book->id) }}"><i class="fas fa-edit"></i>
                                            </a>
                                            |
                                            <a href="{{ route('buku.destroy', $book->id) }}"><i class="fas fa-trash"
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
