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
                  <h1 class="text-white animated zoomIn">Bài viết</h1>
                  <hr class="bg-white mt-0" style="width: 90px;">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a class="text-white" href="{{ URL::route('homepage') }}">Trang chủ</a></li>
                          <li class="breadcrumb-item"><a class="text-white" href="{{ URL::route('news') }}">Danh sách bài viết</a></li>
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
                    @foreach($news as $new)
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <a href="{{ URL::route('news-detail', ['id' => $new->id, 'slug' => $new->slug]) }}" title="{{ $new->title }}" class='text-dark'>
                                        <h5 class="card-title news-card-title truncate-two-line">
                                            {{ $new->title }}
                                        </h5>
                                    </a>
                                    <p class="card-text truncate-two-line">
                                        {{ substr($new->description, 0, 200) }}
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
  </div>
    @if($news)
        @include('components.pagination.default', ['paginator' => $news, 'link_limit' => 10])
    @endif
<!-- News End -->
      
@endsection
