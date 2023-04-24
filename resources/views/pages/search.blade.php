@extends('layouts.default')

@section('title')
Tìm kiếm
@endsection

@section('head')
  <link href="{{ asset('/css/search.css') }}" rel="stylesheet" />
@endsection


@section('content')
    <!-- Navbar & Hero Start -->
    <div class="position-relative p-0">
        <div class="py-5 bg-main-blue hero-header">
            <div class="container my-lg-5 py-md-5 px-lg-5">
                <div class=" g-5 py-5">
                <div class="col-12">
                    <h1 class="text-white animated zoomIn">Trang tìm kiếm</h1>
                    <hr class="bg-white mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Bài viết</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Tìm kiếm với từ khóa: sdfsdf</li>
                        </ol>
                    </nav>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
  
    <!-- Search Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class='row g-4'>
                        Trang tìm kiếm
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->
@endsection