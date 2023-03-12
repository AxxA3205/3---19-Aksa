<div class="container">


    <div class="row mt-5">
        @foreach ($books as $book)
            <div class="col-md-3 mt-3">
                <div class="card">
                    <img src="{{ asset('uploads/' . $book->file_path) }}" height="300" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->judul_buku }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $book->kategori }}</li>
                        <li class="list-group-item">{{ $book->pengarang }}</li>
                        <li class="list-group-item">{{ $book->penerbit }}</li>
                        <li class="list-group-item">{{ $book->tahun_terbit }}</li>
                        <li class="list-group-item"><button class="btn btn-success">Lihat</button></li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>


</div>
