<div class="container">
    <div class="row mt-5">
        @foreach ($books as $book)
            <div class="col-md-3 mt-3 mb-5">
                <div class="card h-100">
                    <img src="{{ asset('uploads/' . $book->file_path) }}" height="300" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->judul_buku }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Kategori: {{ $book->kategori }}</li>
                        <li class="list-group-item">Ditulis oleh {{ $book->pengarang }}</li>
                        <li class="list-group-item">Diterbit oleh {{ $book->penerbit }}</li>
                        <li class="list-group-item">Diterbit pada {{ $book->tahun_terbit }}</li>
                        <li class="list-group-item">
                            <a href="{{ route('show', $book->id) }}" class="btn btn-primary">Lihat</a>
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>


</div>
