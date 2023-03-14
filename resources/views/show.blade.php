<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Aksa - View</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
        body {
            background-color: #edf1f5;
            margin-top: 20px;
        }

        .card {
            margin-bottom: 30px;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0.5px solid black;
            border-radius: 0;
        }

        .card .card-subtitle {
            font-weight: 300;
            margin-bottom: 10px;
            color: #8898aa;
        }

        .table-product.table-striped tbody tr:nth-of-type(odd) {
            background-color: #f3f8fa !important
        }

        .table-product td {
            border-top: 0px solid #dee2e6 !important;
            color: #728299 !important;
        }
    </style>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{ $book->judul_buku }}</h3>
                <h6 class="card-subtitle">oleh {{ $book->pengarang }}</h6>
                <div class="row">
                    <div class="col-12 col-md-4 mb-5 align-self-center">
                        <div class="white-box text-center"><img src="{{ asset('uploads/' . $book->file_path) }} "
                                height="500" width="350" class="img-responsive"></div>
                    </div>
                    <div class="col-lg-7 col-md-5 col-sm-6">
                        <h4 class="box-title">Deskripsi Buku</h4>
                        <p>{{ $book->deskripsi }}</p>
                        <p>Kategori : {{ $book->kategori }}</p>
                        <p>Penerbit : {{ $book->penerbit }}</p>
                        <p>Tahun terbit : {{ $book->tahun_terbit }}</p>

                    </div>
                </div>
            </div>
            <div class="container text-center">
                <div class="row align-items-end">
                    <div class="col-md-10 offset-md-1 ">
                        <button type="button" class="btn btn-block" style="background-color:#ef7c10; color: white">Baca Buku</button>
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
</body>

</html>
