@extends('layouts.default')

@section('title')
    Khoá học lập trình Mobile (React native)
@endsection

@section('head')
    <meta name="description" content="Học lập trình web, học lập trình online, khoá học lập trình online, khoá học lập trình web, khóa học front end, học backend, khoá học fullstack, học lập trình mobile, học lập trình app"/>
    <meta property="og:title" content="Khoá học lập trình Mobile" />
    <meta property="og:description" content="Học lập trình web, học lập trình online, khoá học lập trình online, khoá học lập trình web, khóa học front end, học Fullstack, khoá học fullstack, học lập trình mobile, học lập trình app" />
    <meta property="og:site_name" content="Khoá học lập trình Mobile" />
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
                        <li class="breadcrumb-item text-white active" aria-current="page">Khoá học Mobile</li>
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
                <div class='row g-4 courses'>
                    <div class='course-title'>
                        <h1>
                            Khoá học lập trình Mobile (React native)
                        </h1>
                        <div class='title-dot'></div>
                    </div>
                    <div class='course-body'>
                        <div class='course-body__top'>
                            <p>Bạn là người mới bắt đầu học về lập trình mobile ?</p>
                            <p>Bạn đã có kiến thức căn bản về lập trình mobile nhưng chưa được tham gia vào dự án thực tế ?</p>
                            <h4> Khoá học này dành cho bạn</h4>
                        </div>

                        <div class='course-body__receive'>
                            <div class='course-body-title'>Hình thức dạy</div>
                            <div>
                                <ul>
                                    <li>
                                    Dạy online qua Teamview và Google Meet
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class='course-body__receive'>
                            <div class='course-body-title'>Thời gian học</div>
                            <div>
                                <ul>
                                    <li>
                                    3 tháng (1 tuần 2 buổi, mỗi buổi 2h)
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class='course-body__receive'>
                            <div class='course-body-title'>Bạn sẽ được</div>
                            <div>
                                <ul>
                                    <li>Học với chuyên gia trong ngành</li>
                                    <li>Học 1 kèm 1, hỗ trợ fix bug ngoài giờ 24/7</li>
                                    <li>Được tham gia dự án thực tế cuối khoá</li>
                                    <li>Được tham gia group hỗ trợ học viên</li>
                                    <li>Đặc biệt, khi kết thúc khoá học, học viên sẽ được cấp <b class='text-main-secondary'>giấy xác nhận thực tập</b> tại công ty <b class='text-main-blue'>Bqsoft</b></li>
                                </ul>
                            </div>
                        </div>

                        <div class='course-body__content'>
                            <div class='course-body-title'>Nội dung chính khoá học</div>
                            <div>
                                <ul>
                                    <li>
                                        <label class='course-chapter'>Git</label>
                                        <p class='course-chapter-content'>- Các lệnh git cơ bản thường được sử dụng</p>
                                    </li>
                                    <li>
                                        <label class='course-chapter'>Javascript</label>
                                        <p class='course-chapter-content'>- Học Javascript từ cơ bản đến nâng cao</p>
                                    </li>
                                    <li>
                                        <label class='course-chapter'>React native</label>
                                        <p class='course-chapter-content'>- Hiểu rõ về thư viện React native</p>
                                        <p class='course-chapter-content'>- Biết cách sử dụng React Context và React query</p>
                                    </li>
                                    <li>
                                        <label class='course-chapter'>Connect API</label>
                                        <p class='course-chapter-content'>- Cách connect API trong dự án thực tế</p>
                                    </li>
                                    <li>
                                        <label class='course-chapter'>Làm dự án cuối khoá</label>
                                        <p class='course-chapter-content'>- Hoàn thành khoá học</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class='course-body__result'>
                            <div class='course-body-title'>Kết quả đạt được sau khi tham gia khoá học</div>
                            <div>
                                <ul>
                                    <li>Nắm rõ quy trình làm việc, từ khi nhận file thiết kế đến khi hoàn thành dự án</li>
                                    <li>Có tư duy lập trình, tư duy hệ thống tốt, tự tin có thể hoàn thành hầu hết dự án gặp phải.</li>
                                    <li>Nắm chắc kiến thức nền tảng, có tư duy tốt để học những ngôn ngữ khác trong tương lai một cách nhanh chóng</li>
                                    <li>Tự xây dựng được 1 app di động chạy trên cả 2 hệ điều hành Ios và Android từ API do Backend cung cấp hoặc API miễn phí</li>
                                    <li>Biết cách tra cứu thông tin, fix bug</li>              
                                </ul>
                            </div>
                        </div>

                        <div class='course-body__price'>
                            <div class='course-body-title'>Học phí khoá học</div>
                            <div>
                                <div class='course-price'>7.990.000 vnđ</div>
                            </div>
                        </div>

                        <div class='course-body__signup'>
                            <a href="{{ URL::route('courses-signup', ['course' => 4]) }}">Đăng ký ngay</a>
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