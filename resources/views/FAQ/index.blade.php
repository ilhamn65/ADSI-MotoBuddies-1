@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Halaman FAQ </title>
        <!-- fontawasome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <!-- google font -->
    </head>
    <div class="questions-container">
        <div class="question">
            <button>
                <span>Apakah pembelian produk dapat dikembalikan?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Ya, Anda dapat mengembalikan produk yang telah dibeli maksimal 7x24 jam setelah pembelian.</p>
        </div>

        <div class="question">
            <button>
                <span>Apakah produk ini memiliki garansi?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Kamu bisa cek ketersediaan garansi produk melalui halaman “Deskripsi Produk” > “Garansi”.</p>
        </div>

        <div class="question">
            <button>
                <span>Apakah saya dapat memesan jadwal servis?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Ya, Anda dapat memesan jadwal servis dengan melakukan pemesanan pada fitur “Service Booking”.</p>
        </div>

        <div class="question">
            <button>
                <span>Apa saja metode pembayaran yang tersedia?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Pembayaran tunai, pembayaran non-tunai dan pembayaran m-banking.</p>
        </div>

        <div class="question">
            <button>
                <span>Bagaimana cara menghubungi customer servis Motobuddies?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Anda dapat menghubungi customer servis Motobuddies melalui fitur “Contact Us”.</p>
        </div>

        <div class="question">
            <button>
                <span>Bagaimana cara memperbarui password?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Anda dapat memperbarui password dengan mengakses fitur “Reset Password” pada akun profil.</p>
        </div>

        <div class="question">
            <button>
                <span>Bisakah saya menerima pengembalian uang?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Anda dapat menerima pengembalian uang apabila telah melaporkan maksimal 3x24 jam.</p>
        </div>

    </div>

    <style>
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .questions-container {
            max-width: 800px;
            margin: 0 auto;
        } */

        .question {
            border-bottom: 1px solid #474747;
        }

        .question button {
            width: 100%;
            background-color: whitesmoke;
            display: flex;
            justify-content: space-between;
            text-align: left;
            align-items: center;
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            color: #474747;
            font-weight: bold;
            cursor: pointer;
        }

        .question p {
            font-size: 15px;
            max-height: 0;
            opacity: 0;
            /* line-height: 1.5; */
            overflow: hidden;
            transition: all 0.6s ease;
            background-color: whitesmoke;
        }

        .d-arrow {
            transition: transform 0.5s ease-in;
            color: #474747;
        }

        .active,
        .question button:hover {
            color: #777777;
        }

        /*add this class when click*/
        .question p.show {
            max-height: 100px;
            opacity: 1;
            padding: 0px 15px 15px 15px;
            color: #777777;
            background-color: whitesmoke;
        }

        .question button .d-arrow.rotate {
            transform: rotate(180deg);
            color: #777777;
        }

    </style>


    <script>
        const buttons = document.querySelectorAll('button');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const faq = button.nextElementSibling;
                const icon = button.children[1];

                faq.classList.toggle('show');
                icon.classList.toggle('rotate');
            })
        })
    </script>
@endsection
