@extends('users.layouts.layout')

@section('konten')
    <section id="banner">
        <div class="d-flex justify-content-between align-items-center">
            <div class="container p-4 ">
                <h2 class="text-primary mb-5"><span class="text-warning">Solusi untuk pengalaman</span> belajar fisika yang
                    lebih
                    interaktif dan menyenangkan!</h2>
                <h5 class="text-primary mb-3">
                    Jelajahi berbagai fitur dan materi yang kami tawarkan untuk meningkatkan pengalaman belajar mengajar
                    Anda.
                </h5>
                <a href="#terbaru" class="btn btn-primary">Temukan Lebih Banyak</a>
            </div>
            <img src="{{ URL::asset('assets/img/banner.png') }}" alt="Banner">
        </div>
        <div class="container-fluid bg-web-primary mb-3" style="height: 20vh"></div>
    </section>

    <section id="mengapa" class="mb-4 d-flex align-items-center" style="height: 80vh">
        <div class="container">
            <h4 class="text-warning mb-4 fw-bold">Mengapa harus Spinet?</h4>
            <div class="row justify-content-center">
                <div class="col-4 col-md-4 col-sm-12">
                    <div class="card card-mengapa">
                        <div class="card-body text-center py-4">
                            <div class="text-center mb-3">
                                <img src="{{ URL::asset('assets/icons/interaktif.png') }}" style="width: 7em"
                                    alt="">
                            </div>
                            <div class="fw-bold">Pengalaman Interaktif</div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-4 col-sm-12">
                    <div class="card card-mengapa">
                        <div class="card-body text-center py-4">
                            <div class="text-center mb-3">
                                <img src="{{ URL::asset('assets/icons/navigasi.png') }}" style="width: 7em" alt="">
                            </div>
                            <div class="fw-bold">Navigasi yang mudah</div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-4 col-sm-12">
                    <div class="card card-mengapa">
                        <div class="card-body text-center py-4">
                            <div class="text-center mb-3">
                                <img src="{{ URL::asset('assets/icons/konten.png') }}" style="width: 7em" alt="">
                            </div>
                            <div class="fw-bold">Konten Berkualitas</div>
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

    <section id="media" class="mb-4 d-flex align-items-center" style="height: 80vh">
        <div class="container">
            <h4 class="text-warning mb-4 fw-bold">Media apa saja yang ada di Spinet?</h4>
            <div class="row justify-content-center">
                <div class="col-3 col-md-3 col-sm-6">
                    <div class="card card-mengapa bg-web-primary" style="height: 18em">
                        <div class="card-body text-center py-4 d-flex align-items-center justify-content-center">
                            <div class="text-center mb-3">
                                <img src="{{ URL::asset('assets/icons/poster.png') }}" style="width: 7em" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-6">
                    <div class="card card-mengapa bg-web-primary" style="height: 18em">
                        <div class="card-body text-center py-4 d-flex align-items-center justify-content-center">
                            <div class="text-center mb-3">
                                <img src="{{ URL::asset('assets/icons/materi.png') }}" style="width: 7em" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-6">
                    <div class="card card-mengapa bg-web-primary" style="height: 18em">
                        <div class="card-body text-center py-4 d-flex align-items-center justify-content-center">
                            <div class="text-center mb-3">
                                <img src="{{ URL::asset('assets/icons/modul.png') }}" style="width: 7em" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-6">
                    <div class="card card-mengapa bg-web-primary" style="height: 18em">
                        <div class="card-body text-center py-4 d-flex align-items-center justify-content-center">
                            <div class="text-center mb-3">
                                <img src="{{ URL::asset('assets/icons/video.png') }}" style="width: 7em" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="terbaru" class="mb-4 d-flex align-items-center">
        <div class="container">
            <h4 class="text-warning mb-4 fw-bold">Media Terbaru</h4>
            <div class="row justify-content-center">
                <div class="col-3 col-md-3 col-sm-6">
                    <div class="card card-mengapa" style="height: 33em">
                        <div class="card-body text-center d-flex flex-column justify-content-center">
                            <div class="bg-warning py-1 px-3 align-self-end mb-2 fw-bold">PDF</div>
                            <div class="text-center mb-3">
                                <img src="{{ URL::asset('assets/img/media-terbaru.png') }}" class="img-fluid"
                                    style="height: 20em" alt="">
                            </div>
                            <p class="text-start">Kursus ini dirancang untuk memberikan dasar yang kuat dalam konsep-konsep
                                fundamental.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-6">
                    <div class="card card-mengapa" style="height: 33em">
                        <div class="card-body text-center d-flex flex-column justify-content-center">
                            <div class="bg-warning py-1 px-3 align-self-end mb-2 fw-bold">PDF</div>
                            <div class="text-center mb-3">
                                <img src="{{ URL::asset('assets/img/media-terbaru.png') }}" class="img-fluid"
                                    style="height: 20em" alt="">
                            </div>
                            <p class="text-start">Kursus ini dirancang untuk memberikan dasar yang kuat dalam konsep-konsep
                                fundamental.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-6">
                    <div class="card card-mengapa" style="height: 33em">
                        <div class="card-body text-center d-flex flex-column justify-content-center">
                            <div class="bg-warning py-1 px-3 align-self-end mb-2 fw-bold">PDF</div>
                            <div class="text-center mb-3">
                                <img src="{{ URL::asset('assets/img/media-terbaru.png') }}" class="img-fluid"
                                    style="height: 20em" alt="">
                            </div>
                            <p class="text-start">Kursus ini dirancang untuk memberikan dasar yang kuat dalam konsep-konsep
                                fundamental.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-6">
                    <div class="card card-mengapa" style="height: 33em">
                        <div class="card-body text-center d-flex flex-column justify-content-center">
                            <div class="bg-warning py-1 px-3 align-self-end mb-2 fw-bold">PDF</div>
                            <div class="text-center mb-3">
                                <img src="{{ URL::asset('assets/img/media-terbaru.png') }}" class="img-fluid"
                                    style="height: 20em" alt="">
                            </div>
                            <p class="text-start">Kursus ini dirancang untuk memberikan dasar yang kuat dalam konsep-konsep
                                fundamental.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-primary my-5">Temukan Lebih Banyak</a>
            </div>
        </div>
    </section>

    <section id="review" class="mb-4 d-flex align-items-center" style="height: 80vh">
        <div class="container-fluid">
            <h4 class="text-warning mb-4 fw-bold">Umpan Balik Pelanggan Kami</h4>
            <div class="row justify-content-center">
                <div class="col-3 col-md-3 col-sm-12">
                    <div class="card card-mengapa" style="height: 13em">
                        <div class="card-body text-center py-4 d-flex flex-column justify-content-start">
                            <img src="{{ URL::asset('assets/img/profile.png') }}" class="mb-2"
                                style="width: 3em; height: 3em; object-fit: cover" alt="">
                            <h6 class="fw-bold text-start mb-4">Floyd Medes</h6>
                            <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem,
                                molestiae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-12">
                    <div class="card card-mengapa" style="height: 13em">
                        <div class="card-body text-center py-4 d-flex flex-column justify-content-start">
                            <img src="{{ URL::asset('assets/img/profile.png') }}" class="mb-2"
                                style="width: 3em; height: 3em; object-fit: cover" alt="">
                            <h6 class="fw-bold text-start mb-4">Floyd Medes</h6>
                            <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem,
                                molestiae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-12">
                    <div class="card card-mengapa" style="height: 13em">
                        <div class="card-body text-center py-4 d-flex flex-column justify-content-start">
                            <img src="{{ URL::asset('assets/img/profile.png') }}" class="mb-2"
                                style="width: 3em; height: 3em; object-fit: cover" alt="">
                            <h6 class="fw-bold text-start mb-4">Floyd Medes</h6>
                            <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem,
                                molestiae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-12">
                    <div class="card card-mengapa" style="height: 13em">
                        <div class="card-body text-center py-4 d-flex flex-column justify-content-start">
                            <img src="{{ URL::asset('assets/img/profile.png') }}" class="mb-2"
                                style="width: 3em; height: 3em; object-fit: cover" alt="">
                            <h6 class="fw-bold text-start mb-4">Floyd Medes</h6>
                            <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem,
                                molestiae.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
