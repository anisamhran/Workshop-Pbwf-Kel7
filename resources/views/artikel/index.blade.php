@extends('layout.main')
@section('content')

<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Artikel</h1>
            <a href="/" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Artikel</a>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Artikel Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s mb-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 mb-5">
                <div class="owl-carousel price-carousel wow zoomIn mb-5" data-wow-delay="0.9s">
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="img/pricing-1.jpg" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Pahami Diabetes: Pengertian, Tipe, Gejala, dan Preventifnya</h4>
                            <a href="artikel.tampilan" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="img/pricing-2.jpg" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Mengenal Komplikasi Diabetes: Pencegahan dan Pengobatan</h4>
                            <a href="artikel.tampilan" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="img/pricing-3.jpg" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Pengelolaan Diabetes: Tips Menjaga Gula Darah Tetap Stabil</h4>
                            <a href="artikel.tampilan" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel price-carousel wow zoomIn mb-5" data-wow-delay="0.9s">
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="img/pricing-1.jpg" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Pahami Diabetes: Pengertian, Tipe, Gejala, dan Preventifnya</h4>
                            <a href="artikel.tampilan" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="img/pricing-2.jpg" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Mengenal Komplikasi Diabetes: Pencegahan dan Pengobatan</h4>
                            <a href="artikel.tampilan" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="img/pricing-3.jpg" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Pengelolaan Diabetes: Tips Menjaga Gula Darah Tetap Stabil</h4>
                            <a href="artikel.tampilan" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Artikel End -->



{{-- <div class="container">
    <div class="row g-4">
        @foreach($artikels as $artikel)
        <div class="col-lg-4">
            <div class="custom-card">
                <img src="{{ asset('artikelimg/' . $artikel->image) }}" class="card-img-top custom-img" alt="{{ $artikel->judul_artikel }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $artikel->judul_artikel }}</h5>
                    <p class="card-text">{{ $artikel->tgl_artikel }}</p>
                    <a href="{{ '/artikel/tampilan/'.$artikel->id }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> --}}
@endsection
