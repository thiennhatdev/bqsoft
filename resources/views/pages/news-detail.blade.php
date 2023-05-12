@extends('layouts.default')

@section('title')
{{-- {{ $news_detail->title }} --}}
@endsection

@section('head')
  {{-- <meta name="description" content="{!! Str::words($news_detail->description, 150)  !!}"/> --}}
  {{-- <meta property="og:title" content="{{ $news_detail->title }}" /> --}}
  {{-- <meta property="og:description" content="{!! Str::words($news_detail->description, 150)  !!}" /> --}}
  {{-- <meta property="og:site_name" content="{{ $news_detail->title }}" /> --}}

  <link href="{{ asset('/css/news-detail.css') }}" rel="stylesheet" />
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
                        <li class="breadcrumb-item"><a class="text-white" href="{{ URL::route('homepage') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="{{ URL::route('news') }}">Danh sách bài viết</a></li>
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
                    <h1>{{ $news_detail->title }}</h1>
                    <div class='content-of-table'>
                        {!! $menu !!}
                    </div>
                    <div class='news-detail-body'>
                        {!! $body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- News End -->
      
@endsection