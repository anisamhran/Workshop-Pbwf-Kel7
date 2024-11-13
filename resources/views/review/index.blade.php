@extends('layout.main')
@section('content')
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary hero-header">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Ulasan</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Ulasan</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Testimonial Start -->
    <div class="container-fluid  py-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-1.jpg" alt="">
                            <p class="fs-5">Saya telah menggunakan layanan kesehatan diabetes ini selama beberapa bulan sekarang dan saya sangat terkesan.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Mirna Salihin</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">Website ini adalah sumber informasi yang sangat baik tentang diabetes. Saya baru saja didiagnosis dengan diabetes tipe 2, dan website ini telah membantu saya memahami kondisi saya dengan lebih baik.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Jessica Mirna</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Newsletter Start -->
    {{-- <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Ketik Ulasan...">
                        <button class="btn btn-dark px-4">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- buat review baru nulis komentar setealah melakukan service --}}
    <!-- Newsletter End -->
@endsection
