@extends('layouts.default')

@section('title')
Công ty Bqsoft
@endsection

@section('head')
<meta name="description" content="{!! Str::words($about->description ?? '', 150)  !!}"/>
  <meta property="og:title" content="{{ $about->title ?? '' }}" />
  <meta property="og:description" content="{!! Str::words($about->description ?? '', 150)  !!}" />
  <meta property="og:site_name" content="{{ $about->title ?? '' }}" />

  <link href="{{ asset('/css/about.css') }}" rel="stylesheet" />
@endsection


@section('content')
    <!-- Navbar & Hero Start -->
    <div class="position-relative p-0">
        <div class="py-5 bg-main-blue hero-header">
            <div class="container my-lg-5 py-md-5 px-lg-5">
                <div class=" g-5 py-5">
                <div class="col-12">
                    <h1 class="text-white animated zoomIn">Giới thiệu</h1>
                    <hr class="bg-white mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Công ty TNHH BQSOFT</a></li>
                        </ol>
                    </nav>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
    
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 offset-lg-0 col-8 offset-2">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/thumbnail-info-company.png">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <p class="position-relative text-main-blue ps-4">Về chúng tôi</p>
                            <h2 class="mt-2">Chúng tôi là nhà cung cấp hàng đầu các giải pháp chuyển đổi kỹ thuật số.</h2>
                        </div>
                        <p class="mb-4 company-about-content">Với kinh nghiệm và chuyên môn của đội ngũ chuyên gia, chúng tôi cam kết cung cấp các giải pháp tốt nhất cho khách hàng, từ phân tích, đánh giá nhu cầu đến thiết kế và triển khai hệ thống. Chúng tôi tin rằng chuyển đổi kỹ thuật số có thể giúp các công ty tiết kiệm thời gian và tiền bạc, tăng hiệu quả và cải thiện khả năng cạnh tranh trên thị trường.</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <p class="mb-3 text-main-secondary"><i class="fa fa-check me-2"></i>Lấy khách hàng là trung tâm</p>
                                <p class="mb-0 text-main-secondary"><i class="fa fa-check me-2"></i>Đội ngũ giàu kinh nghiệm</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-3 text-main-secondary"><i class="fa fa-check me-2"></i>Hỗ trợ 24/7</p>
                                <p class="mb-0 text-main-secondary"><i class="fa fa-check me-2"></i>Chất lượng là ưu tiên hàng đầu</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <!-- <a class="btn btn-main-blue rounded-pill px-4 me-3" href="#">Read More</a> -->
                            <a class="btn btn-outline-main-blue btn-square me-3" href="https://www.facebook.com/hoctusach" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-main-blue btn-square me-3" href="https://twitter.com/Bqsoftvn" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-main-blue btn-square me-3" href="https://www.instagram.com/vonhat11/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-main-blue btn-square" href="https://www.linkedin.com/in/bqsoft-vn-48ab44278/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Newsletter Start -->
        <div class="bg-main-blue newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Gửi những tin tức mới nhất đến email</h3>
                        <small class="text-white">Những thông tin mới sẽ giúp nắm bắt được những cơ hội!</small>
                        <div class="position-relative w-100 mt-3">
                            <form class="requires-validation" novalidate method="POST" action="{{ URL::route('save-mail') }}">
                                {{ csrf_field() }}
                                <input type="email" name="email" class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Địa chỉ email của bạn" style="height: 48px;" required>
                                <div class="invalid-feedback mt-2">
                                    Vui lòng nhập đúng định dạng email!
                                </div>
                                <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-main-blue fs-4"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="height: 250px;" src="img/thumbnail-send-letter.webp">
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <p class="position-relative d-inline text-main-blue ps-4">Đội ngũ</p>
            <h2 class="mt-2">Tất cả thành viên công ty</h2>
        </div>
        <div class="row g-4">
            @foreach($members as $member)
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                <a class="btn btn-square text-main-blue bg-white my-1" href="{{ $member->fb_link ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-main-blue bg-white my-1" href="{{ $member->twitter_link ?? '#' }}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-main-blue bg-white my-1" href="{{ $member->instagram_link ?? '#' }}"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square text-main-blue bg-white my-1" href="{{ $member->linked_link ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <img class="img-fluid rounded w-100 member-avatar" src="{{ $member->image('avatar', 'default') }}" alt="">
                        </div>
                        <div class="px-4 py-3">
                            <h5 class="fw-bold m-0">{{ $member->name }}</h5>
                            <small>{{ $member->career_title }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    <!-- Team End -->

    @if(session('mail_message'))
    <div class='mail-toast'>
        <p>{{ session('mail_message') }}</p>
        <i class="fas fa-times close-toast-mail"></i>
    </div>
    @endif

@endsection
