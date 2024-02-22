@extends('layouts.default')

@section('title')
    {{ $news_detail->title }}
@endsection

@section('head')
    <meta name="description" content="{!! Str::words($news_detail->description, 150)  !!}"/>
    <meta property="og:title" content="{{ $news_detail->title }}" />
    <meta property="og:description" content="{!! Str::words($news_detail->description, 150)  !!}" />
    <meta property="og:site_name" content="{{ $news_detail->title }}" />
    <meta property="og:image" content="{{ $news_detail->image('thumbnail', 'default') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta content="text/html; charset=UTF-8" name="Content-Type" />
    <meta name="twitter:title" content="{{ $news_detail->title }}" />
    <meta name="twitter:description" content="{!! Str::words($news_detail->description, 150)  !!}" />
    <meta name="twitter:site_name" content="{{ $news_detail->title }}" />
    <meta name="twitter:image" content="{{ $news_detail->image('thumbnail', 'default') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">


  <link href="{{ asset('/css/news-detail.css') }}" rel="stylesheet" />
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

            <div class="col-12 col-lg-9 wow fadeInUp" data-wow-delay="0.1s">
                <div class='row g-4 news-detail'>
                    <h1>{{ $news_detail->title }}</h1>
                    <div class="mt-0">
                        <i class="fas fa-calendar"></i>
                        <span>Ngày đăng: </span> {{ \Carbon\Carbon::parse($news_detail->updated_at)->format('d/m/Y') }}
                    </div>
                    <div class='content-of-table'>
                        {!! $menu !!}
                    </div>
                    <div class='news-detail-body'>
                        {!! $body !!}
                    </div>
                    <div class='contact-news-detail'>
                        <h5>Liên hệ ngay <a target="_blank" href="https://bqsoft.vn/#our-contact"><i class="contact-here">tại đây</i></a> với chúng tôi để được tư vấn nhanh nhất <b>hoặc</b> liên hệ:</h5>
                        <br />
                        <div>
                            <p><i>Hotline</i>: <b class="">0705.550.553</b></p>
                            <p><i>Email</i>: <b>bqsoftvn@gmail.com</b></p>
                            <p><i>Fanpage</i>: <a target="_blank" href="https://www.facebook.com/bqsoftvn"><b>https://www.facebook.com/bqsoftvn</b></a></p>
                        </div>
                        <br />
                        <p>Hân hạnh được hợp tác!</p>
                    </div>
                    <div class="pt-3 mt-3 border-top">
                        <!-- Your like button code -->
                        <div class="fb-like" 
                            data-href="{{ url()->current() }}" 
                            data-width="250"
                            data-layout="standard" 
                            data-action="like" 
                            data-size="small"  
                            data-share="true">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3 pl-0">
                <div class="lastest-news">
                    <div class="lastest-news-title">
                        <h3>
                            Bài viết mới nhất
                        </h3>
                    </div>
                    <ul class="lastest-news-body">
                        @foreach($recent_news as $new)
                            <li>
                                <a href="{{ URL::route('news-detail', ['id' => $new->id, 'slug' => $new->slug]) }}" title="{{ $new->title }}"  class="truncate-two-line">{{ $new->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- News End -->
<div class='bg-secondary'>

</div>
@endsection

@section('script')

@endsection