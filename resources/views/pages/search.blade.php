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
                            <li class="breadcrumb-item text-white active" aria-current="page">Tìm kiếm với từ khóa: {{ request()->route('slug') }}</li>
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
                        @if($results->isEmpty())
                            <h1 class='result-empty'>
                                <i class="bi bi-search"></i>
                                <span>Không tìm thấy kết quả</span>
                            </h1>
                        @else
                            @foreach($results as $new)
                                <div class="col-md-6">
                                    <div class="card shadow-sm border-0">
                                        <div class="card-body">
                                            <a href="{{ URL::route('news-detail', ['id' => $new->id, 'slug' => $new->slug]) }}" title="{{ $new->title }}" class='text-dark'>
                                                <h5 class="card-title">
                                                    {{ $new->title }}
                                                </h5>
                                            </a>
                                            <p class="card-text truncate-two-line">
                                                {{ substr(strip_tags($new->renderBlocks()), 0, 200) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.pagination.default', ['paginator' => $results, 'link_limit' => 10])

    <!-- Search End -->
@endsection