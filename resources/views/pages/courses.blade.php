@extends('layouts.default')

@section('title')
    Danh sách khoá học lập trình onine
@endsection

@section('head')
    <meta name="description" content="Học lập trình web, học lập trình online, khoá học lập trình online, khoá học lập trình web, khóa học front end, học backend, khoá học fullstack, học lập trình mobile, học lập trình app"/>
    <meta property="og:title" content="Danh sách khoá học lập trình online" />
    <meta property="og:description" content="Học lập trình web, học lập trình online, khoá học lập trình online, khoá học lập trình web, khóa học front end, học backend, khoá học fullstack, học lập trình mobile, học lập trình app" />
    <meta property="og:site_name" content="Danh sách khoá học lập trình online" />
    <meta property="og:image" content="">
    <meta property="og:url" content="{{ url()->current() }}">

  <link href="{{ asset('/css/courses.css') }}" rel="stylesheet" />
@endsection

@section('content')
 <!-- Navbar & Hero Start -->
 <div class="position-relative p-0">
  <div class="py-5 bg-main-blue hero-header">
      <div class="container my-lg-5 py-md-5 px-lg-5">
          <div class=" g-5 py-5">
            <div class="col-12">
                <h1 class="text-white animated zoomIn">Khoá học lập trình online</h1>
                <hr class="bg-white mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ URL::route('homepage') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Danh sách khoá học</li>
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
                <div class='row g-4 courses'>
                    <div class='course-title'>
                        <h1>
                            Danh sách khoá học lập trình online tại Bqsoft
                        </h1>
                        <div class='title-dot'></div>
                    </div>
                    <div class='all-course'>
                        <a href="{{ URL::route('courses-frontend') }}" title="Học Frontend">
                            <p class='course-item'>
                                Khoá học Frontend (Reactjs)
                            </p>
                        </a>
                        <a href="{{ URL::route('courses-backend') }}" title="Học Backend">
                            <p class='course-item'>
                            Khoá học Backend (Nodejs)
                            </p>
                        </a>
                        <a href="{{ URL::route('courses-fullstack') }}" title="Học Fullstack">
                            <p class='course-item'>
                            Khoá học Fullstack (Reactjs + Nodejs)
                            </p>
                        </a>
                        <a href="{{ URL::route('courses-reactnative') }}" title="Học Front-end">
                            <p class='course-item'>
                            Khoá học Mobile App (React Native)
                            </p>
                        </a>
                    </div>
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