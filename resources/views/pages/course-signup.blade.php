@extends('layouts.default')

@section('title')
    Đăng ký khoá học lập trình online
@endsection

@section('head')
    <meta name="description" content="Học lập trình web, học lập trình online, khoá học lập trình online, khoá học lập trình web, khóa học front end, học backend, khoá học fullstack, học lập trình mobile, học lập trình app"/>
    <meta property="og:title" content="Đăng ký khoá học lập trình online" />
    <meta property="og:description" content="Học lập trình web, học lập trình online, khoá học lập trình online, khoá học lập trình web, khóa học front end, học Fullstack, khoá học fullstack, học lập trình mobile, học lập trình app" />
    <meta property="og:site_name" content="Đăng ký khoá học lập trình online" />
    <meta property="og:image" content="">
    <meta property="og:url" content="{{ url()->current() }}">

  <link href="{{ asset('/css/course.css') }}" rel="stylesheet" />
@endsection

@section('content')
 <!-- Navbar & Hero Start -->
 <div class="position-relative p-0">
  <div class="py-5 bg-main-blue hero-header">
      <div class="container my-lg-5 py-md-5 px-lg-5">
          <div class=" g-5 py-5">
            <div class="col-12">
                <h1 class="text-white animated zoomIn">Khoá học lập trình</h1>
                <hr class="bg-white mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ URL::route('homepage') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Đăng ký</li>
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
                            Đăng ký khoá học
                        </h1>
                        <div class='title-dot'></div>
                    </div>
                    <div class='course-body'>
                        
                        <form class='form-signup-course requires-validation' novalidate method="POST" action="{{ URL::route('courses-signup-action', ['course' => request()->course]) }}">
                            {{ csrf_field() }}
                            <h4>Nhập số điện thoại hoặc email để được hỗ trợ đăng ký</h4>
                            <input type='text' name='phoneOrEmail' placeholder='Sđt hoặc email' class='form-control' required/>
                            <div class="invalid-feedback">
                                Sđt hoặc email là bắt buộc!
                            </div>
                            <div class='course-body__signup mt-3'>
                                <button  type="submit">
                                Đăng ký
                                </button>
                            </div>
                        </form>

                        <h4 class='text-or-info'><b><i>Hoặc</i></b> 
                            <p>liên hệ thông tin</p>

                        </h4>
                        
                        <div class='contact-news-detail'>
                            <div>
                                <p><i>Hotline</i>: <b class="">0705.550.553</b></p>
                                <p><i>Email</i>: <b>bqsoftvn@gmail.com</b></p>
                                <p><i>Fanpage</i>: <a target="_blank" href="https://www.facebook.com/bqsoftvn"><b>https://www.facebook.com/bqsoftvn</b></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- News End -->
<div class='bg-secondary'>

</div>

@if(session('course_signup_message'))
<div class='mail-toast'>
    @if(session('course_signup_message'))
        <p>{{ session('course_signup_message') }}</p>
    @endif
    <i class="fas fa-times close-toast-mail"></i>
</div>
@endif

@endsection

@section('script')

<script src="{{ asset('/js/course.js') }}">
    
</script>
@endsection