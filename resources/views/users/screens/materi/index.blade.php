@extends('users.layouts.layout')

@section('konten')
    <section id="banner">
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-6 col-md-6 col-sm-12">
                    <div class="container p-4">
                        <h1 class="text-primary mb-5 fw-bold" style="font-size: 5em">Materi Ajar</h1>
                        <h5 class="text-primary"><span class="text-warning">Akses koleksi </span> materi ajar yang
                            komprehensif, <span class="text-warning">termasuk </span>artikel, buku elektronik, dan ringkasan
                            <span class="text-warning">topik fisika.</span>
                        </h5>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-sm-12">
                    <div class="text-end">
                        <img src="{{ URL::asset('assets/img/banner-modul.png') }}" alt="Banner">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kelebihan">
        <div class="row">
            <div class="col-3 col-md-3 col-sm-12 align-self-end">
                <img src="{{ URL::asset('assets/img/siswa.png') }}" class="w-75" alt="">
            </div>
            <div class="col-9 col-md-9 col-sm-12 mb-5">
                <div class="row me-5">
                    <div class="col-6 align-self-end">
                        <h2 class="text-warning">Apasih Kelebihannya?</h2>
                    </div>
                    <div class="col-6 justify-self-start">
                        <div class="container bg-warning d-flex align-items-center justify-content-center"
                            style="height: 15em; border-radius: 0px 3em 3em 0px;-webkit-border-radius: 0px 3em 3em 0px;-moz-border-radius: 0px 3em 3em 0px;">
                            <h5 class="fw-bold">Akses Koleksi Materi Ajar yang Komprehensif</h5>
                        </div>
                    </div>
                </div>
                <div class="row align-items-end me-5 mt-4">
                    <div class="col-6">
                        <div class="container bg-warning d-flex align-items-center justify-content-center"
                            style="height: 15em; border-radius: 3em 0em 0em 3em;-webkit-border-radius: 3em 0em 0em 3em;-moz-border-radius: 3em 0em 0em 3em;">
                            <h5 class="fw-bold">Materi yang tersusun</h5>
                        </div>
                    </div>
                    <div class="col-6 justify-self-start">
                        <div class="container bg-warning d-flex align-items-center justify-content-center"
                            style="height: 15em; border-radius: 0px 3em 3em 0px;-webkit-border-radius: 0px 3em 3em 0px;-moz-border-radius: 0px 3em 3em 0px;">
                            <h5 class="fw-bold">Memperdalam Pemahaman tentang Fisika</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="kontak" class="mb-4 bg-web-primary">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-6 col-md-6 col-sm-12">
                    <img src="{{ URL::asset('assets/img/kontak.png') }}" class="w-75" alt="">
                </div>
                <div class="col-6 col-md-6 col-sm-12 text-start">
                    <h4 class="text-warning">Gabung sekarang dan rasakan sendiri bagaimana SPINET dapat mengubah cara
                        anda belajar dan mengajar Fisika.</h4>
                    <p>Jangan ragu untuk menghubungi, kami dengan senang hati siap membantu!</p>
                    <button class="btn btn-primary">Kontak Kami</button>
                </div>
            </div>
        </div>
    </section>
    <section id="media" class="d-flex flex-column align-items-center justify-content-center" style="height: 90vh">
        <div class="container text-center">
            <h3 class="text-warning mb-3 fw-bold">
                "Jelajahi koleksi materi ajar yang lengkap, mulai dari artikel, buku elektronik, hingga ringkasan topik
                fisika, semuanya ditata dengan rapi untuk memudahkan persiapan pembelajaran Anda dan memperdalam pemahaman
                pada topik fisika pilihan Anda."
            </h3>
            <a href="#" class="btn btn-primary">Buka Menu Media</a>
        </div>
    </section>
@endsection
