@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tips & Trick</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        .card {
            transition: 1s;
        }

        .card:hover {
            transform: scale(1.01);
            color: black
        }

        a {
            color: black;
            text-decoration: none;
        }

    </style>
</head>

<body>
    @section('content')
        <div class="container-fluid my-24 py-12">


            <div class="col">
                @foreach ($tipstricks as $tiptrick)
                    <a href="tips-tricks/{{ $tiptrick->id }}">
                        <div class="card mb-3 shadow">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('tips-tricks-image/' . $tiptrick->foto) }}"
                                        class="img-fluid rounded-start">
                                </div>
                                <div class="col-md-8 d-flex justify-content-center align-items-center">
                                    <h2 class="card-title">{{ $tiptrick->judul }}</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        </div>
    @endsection
</body>

</html>
