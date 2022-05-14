@extends('layouts.app')

@section('content')
    <style>
        .collapsible {
            background-color: whitesmoke;
            color: #474747;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            font-weight: bold;
            
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        }

        .active,
        .collapsible:hover {
            background-color: #C7D4DF;
            color: #474747;
        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #C7D4DF;
            color: #474747;
        }
        /* color white f1f1f1 */
    </style>

    <button type="button" class="collapsible">Apakah pembelian produk dapat dikembalikan?</button>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
    </div>
    <button type="button" class="collapsible">Apakah produk ini memiliki garansi?</button>
    <div class="content">
        <p>Kamu bisa cek ketersediaan garansi produk melalui halaman “Deskripsi Produk” > “Garansi”.</p>
    </div>
    <button type="button" class="collapsible">Apakah saya dapat memesan jadwal servis?</button>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
    </div>
    <button type="button" class="collapsible">Apa saja metode pembayaran yang tersedia?</button>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
    </div>
    <button type="button" class="collapsible">Bisakah saya menerima pengembalian uang?</button>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
    </div>
    <button type="button" class="collapsible">Lorem ipsum dolor sit amet, consectetur?</button>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
    </div>
    <button type="button" class="collapsible">Lorem ipsum dolor sit amet, consectetur?</button>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
    </div>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>
@endsection
