@extends('layouts.default')

@section('title')
Không tìm thấy
@endsection

@section('head')
  <link href="{{ asset('/css/404.css') }}" rel="stylesheet" />
@endsection


@section('content')
 <!-- Navbar & Hero Start -->
 <div class="position-relative p-0">
    <div class="py-5 bg-main-blue hero-header">
        <div class="container my-lg-5 py-md-5 px-lg-5">
            <div class=" g-5 py-5">
              <div class="col-12 py-5">
              </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Navbar & Hero End -->
  
<!-- 404 Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container px-lg-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-main-blue"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4">Page Not Found</h1>
                <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                <a class="btn btn-main-blue rounded-pill py-3 px-5" href="">Go Back To Home</a>
            </div>
        </div>
    </div>
</div>
<!-- 404 End -->
@endsection

