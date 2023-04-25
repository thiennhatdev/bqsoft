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
    <div class="py-5 bg-main-blue hero-header">
        <div class="container my-lg-5 py-md-5 px-lg-5">
            <div class=" g-5 py-5">
              <div class="col-12">
                  <h1 class="text-white animated zoomIn">Tin tức</h1>
                  <hr class="bg-white mt-0" style="width: 90px;">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a class="text-white" href="#">Trang chủ</a></li>
                          <li class="breadcrumb-item"><a class="text-white" href="#">Danh sách bài viết</a></li>
                          <li class="breadcrumb-item text-white active" aria-current="page">Chi tiết bài viết</li>
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
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class='row g-4'>
                    <div class="col-md-6">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <a href="#" class='text-dark'>
                                    <h5 class="card-title">
                                        Danger card title
                                    </h5>
                                </a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class='text-dark'>
                                    <h5 class="card-title">
                                        Danger card title
                                    </h5>
                                </a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class='text-dark'>
                                    <h5 class="card-title">
                                        Danger card title
                                    </h5>
                                </a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class='text-dark'>
                                    <h5 class="card-title">
                                        Danger card title
                                    </h5>
                                </a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class='text-dark'>
                                    <h5 class="card-title">
                                        Danger card title
                                    </h5>
                                </a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class='text-dark'>
                                    <h5 class="card-title">
                                        Danger card title
                                    </h5>
                                </a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class='text-dark'>
                                    <h5 class="card-title">
                                        Danger card title
                                    </h5>
                                </a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class='text-dark'>
                                    <h5 class="card-title">
                                        Danger card title
                                    </h5>
                                </a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class='text-dark'>
                                    <h5 class="card-title">
                                        Danger card title
                                    </h5>
                                </a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class='text-dark'>
                                    <h5 class="card-title">
                                        Danger card title
                                    </h5>
                                </a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- News End -->
      
@endsection
