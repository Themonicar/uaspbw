@extends('layouts/main')
@section('title', '.:Dashboard:.')
@section('profile')
<div class="col-lg-12 bg-dark py-4 text-warning"> <b>Sistem Pendukung Keputusan</b>
    <div class="dropdown float-right">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> PROFILE USER
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#Profile">{{Auth::user() -> nama_user}}</a>
          <a class="dropdown-item" href="/logout">Log Out</a>
        </div>
    </div>     
</div>
@endsection
@section('isi')
<div class="card mt-2">
    <div class="card-header">
        <h3>SELAMAT DATANG! <b>{{Auth::user() -> nama_user}}</b></h3>
    </div>
    <div class="card-body">
        <h5 class="card-text">SISTEM PENDUKUNG KEPUTUSAN VIDEO FOR YOUR PAGE TIKTOK BAGI CONTENT CREATOR</h5>
        <p class="card-text">Sistem Pendukung Keputusan For Your Page TikTok merupakan sistem yang dibuat untuk membantu creator dengan metode SAW, sehingga video yang dibuat creator dapat muncul pada For Your Page pengguna aplikasi TikTok.</p>
        <hr>
        <div class="card mt-2">
            <div class="card-body">
                <h5 class="card-text">Kriteria pengambil keputusan memberikan bobot nilai sebagai berikut :</h5>
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Bobot (%)</th>
                    </tr>
                    <tr>
                        <td>C1</td>
                        <td>Jumlah like</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td>C2</td>
                        <td>Jumlah Play</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>C3</td>
                        <td>Jumlah Komentar</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>C4</td>
                        <td>Jumlah Share</td>
                        <td>15</td>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <hr>
        <div class="card mt-2">
            <div class="card-body">
                <h5 class="card-text">Langkah Penyelesaian Simple Additive Weighting (SAW) adalah sebagai berikut :</h5>
                <p class="card-text">1. Menentukan kriteria-kriteria yang akan dijadikan acuan dalam pengambilan keputusan.</p>
                <p class="card-text">2. Menentukan rating kecocokan setiap alternatif pada setiap kriteria.</p>
                <p class="card-text">3. Membuat matriks keputusan berdasarkan kriteria, kemudian melakukan normalisasi matriks berdasarkan persamaan yang disesuaikan dengan jenis atribut sehingga diperoleh matriks ternormalisasi.</p>
                <p class="card-text">4. Hasil akhir diperoleh dari proses perankingan yaitu penjumlahan dari perkalian matriks ternormalisasi dengan vektor bobot sehingga diperoleh nilai terbesar yang dipilih sebagai alternatif terbaik sebagai solusi.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<div class="col-lg-12 bg-dark py-4 text-warning"> <b> &copy; SPK - 2022, UKDW Yogyakarta</b>
    <div>
        <p>Yogi Evan Dwi Kristantyo - Yonathan Fabiano - Selvi Ayu Melianda Sarumaha - Monica Gracethea</p>
    </div>
</div>
@endsection