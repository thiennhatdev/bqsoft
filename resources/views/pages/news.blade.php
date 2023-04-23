@extends('layouts.default')

@section('title')
Danh sách tin
@endsection

@section('head')
  <link href="{{ asset('/css/news.css') }}" rel="stylesheet" />
@endsection

@section('content')
 <!-- Navbar & Hero Start -->
 <div class="position-relative p-0">

  <div class="py-5 bg-main-blue hero-header mb-5">
      <div class="container my-5 py-5 px-lg-5">
          <div class="row g-5 py-5">
              <div class="col-12 text-center">
                  <h1 class="text-white animated zoomIn">Tin tức</h1>
                  <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                          <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                          <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                          <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Navbar & Hero End -->

<!-- News Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-main-blue ps-4">Tin tức</h6>
                    <h2 class="mt-2">The best SEO solution with 10 years of experience</h2>
                </div>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-main-blue me-2"></i>Award Winning</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-main-blue me-2"></i>Professional Staff</h6>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-main-blue me-2"></i>24/7 Support</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-main-blue me-2"></i>Fair Prices</h6>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-main-blue rounded-pill px-4 me-3" href="">Read More</a>
                    <a class="btn btn-outline-main-blue btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-main-blue btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-main-blue btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-main-blue btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.jpg">
            </div>
        </div>
    </div>
  </div>
<!-- News End -->
      
@endsection
