@extends('layouts.app')
@section('title', 'AxxA >>Data Buku<<') @section('content') <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Data Slider</h2>

                    </div>
                    <div class="overview-wrap">
                        <div class="row g-3 align-items-center mt-2">
                            <div class="col-auto">
                                <div class="d-flex flex-row">
                                    <div class="p-0">
                                        <form action="{{route('slider.index')}}" method="GET">
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
                                    <th>Sub Judul</th>
                                    <th nowrap>Cover</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($slider as $index => $slide)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td nowrap>{{ $slide->judul }}</td>
                                        <td>{{ $slide->subjudul }}</td>
                                        <td><img src="{{ asset('uploads/' . $slide->foto) }}" /></td>
                                        <td nowrap>
                                            <a href="{{ route('slider.edit', $slide->id) }}"><i class="fas fa-edit"></i>
                                            </a>
                                            |
                                            <a href="{{ route('slider.destroy', $slide->id) }}"><i class="fas fa-trash"
                                                    style="color:red"></i> </a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

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
