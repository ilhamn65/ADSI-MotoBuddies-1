@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $tiptrick->judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    @section('content')
        <div class="container-fluid py-12 ">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('tips-tricks-image/' . $tiptrick->foto) }}" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="text-center mb-5">{{ $tiptrick->judul }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow p-3">
                        <p>{{ $tiptrick->deskripsi }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
