<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('products.index', [
            'products' => $products,
        ]);
    }


    public function store()
    {

        $service1 = new Product;
        $service2 = new Product;
        $service3 = new Product;
        $service4 = new Product;
        $service5 = new Product;


        $service8 = new Product;
        $service9 = new Product;
        $service10 = new Product;
        $service11 = new Product;
        $service12 = new Product;
        $service13 = new Product;



        $service1->nama = "ACCU SUPER";
        $service1->harga = 1300000;
        $service1->deskripsi = "Beberapa komponen yang umumnya diganti pada service berkala 5000 km atau kurang lebih interval 3-4 bulan adalah kampas rem, filter oli, dan sistem steering. Selain itu montir juga akan mengganti oli mesin dan mengecek cairan lain di mobil.";
        $service1->save();

        $service2->nama = "Audio Max 3000";
        $service2->harga = 1600000;
        $service2->deskripsi = "Ketika servis berkala mobil 10.000 kilometer, mobil akan menjalani proses pembersihan, pengecekan wajib komponen-komponen mobil seperti cairan oli mesin, oli transmisi, minyak rem, oli power steering, air radiator, dan kopling.";
        $service2->save();

        $service3->nama = "Super Window";
        $service3->harga = 1850000;
        $service3->deskripsi = "Penggantian oli mesin kendaraan, pengecekan baut kolong mobil, pemeriksaan fluida dan minyak-minyak, air radiator, suspensi, merupakan beberapa proses servis yang dilakukan dalam paket servis mobil berkala 15.000 kilometer.";

        $service3->save();


        $service4->nama = "Super Knalpot";
        $service4->harga = 2050000;
        $service4->deskripsi = "Ketika servis mobil berkala 20.000 kilometer, umumnya mobil sudah berusia kurang lebih setahun. Oleh karena itu, biaya paket servis mobil berkala 20.000 kilometer ini lebih besar daripada servis berkala sebelumnya.";
        $service4->save();

        $service5->nama = "Spoiler NFS";
        $service5->harga = 2050040;
        $service5->deskripsi = "Biasanya ritual servis besar dilakukan setiap servis berkala kelipatan 10.000 kilometer. Tujuannya adalah, agar kondisi kendaraan selalu dalam keadaan prima.
        Servis besar mobil meliputi penggantian semua cairan oli, termasuk oli mesin, oli transmisi, dan oli gardan. Kemudian baut pada kaki-kaki kendaraan juga menjadi bagian yang diperiksa pada saat melakukan servis besar. ";
        $service5->save();




        $service8->nama = "Jok_Mobil";
        $service8->harga = 300000;
        $service8->deskripsi = "Pada layanan servis jok mobil, kamu bisa memperbaiki, mengupgrade, atau memodifikasi jok-jok mobil kesayanganmu. Hal ini membuat harga servis jok mobil berbeda-beda.";

        $service8->save();

        $service9->nama = "Rem_Mobil";
        $service9->harga = 300000;
        $service9->deskripsi = "Seperti yang dilansir oleh situs otomotifnet.com, servis rem mobil dianjurkan untuk kamu lakukan rutin setiap jarak tempuh 20.000 kilometer. Hal tersebut amat disarankan agar sistem pengereman mobil kita tetap bekerja optimal.";

        $service9->save();

        $service10->nama = "Pintu_Mobil";
        $service10->harga = 300000;
        $service10->deskripsi = "Makin tua usia mobil, maka resiko munculnya masalah di bagian pintu mobil juga semakin besar. Sebab ada komponen yang akan aus akibat sering bergesekan di pintu mobil, yaitu engsel. Dan komponen karet yang dapat mengendur dan mengeras.";

        $service10->save();

        $service11->nama = "Audio_Mobil";
        $service11->harga = 1300000;
        $service11->deskripsi = "Power amplifier atau penguat daya merupakan salah satu komponen penting pada sistem audio mobil, karena memiliki kegunaan untuk memperkuat sinyal masukan dari head unit mobil.";

        $service11->save();

        $service12->nama = "Mesin_Mobil";
        $service12->harga = 2300000;
        $service12->deskripsi = "Mesin mobil punya fungsi yang sangat vital bagi mobil, agar bisa melaju di jalanan. Secara sederhana, cara mesin menggerakkan mobil adalah dengan mengubah energi panas pada kendaraan menjadi energi gerak.";

        $service12->save();

        $service13->nama = "Lampu_Mobil";
        $service13->harga = 430000;
        $service13->deskripsi = "Lampu adalah salah satu komponen penting di mobil kamu. Melihat perkembangan tren model lampu mobil yang semakin beraneka ragam, maka semakin banyak bengkel khusus servis lampu mobil.";

        $service13->save();






        dd(Product::get());
    }
}
