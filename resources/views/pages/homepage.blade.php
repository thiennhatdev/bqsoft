@extends('layouts.default')

@section('title')
Trang chủ
@endsection

@section('head')
    <!-- Meta -->
    <meta name="description" content="Thiết kế website, Thiết kế App Mobile, Seo tổng thể, Chuyển đổi số"/>
    <meta name="author" content="Bqsoft">
    <meta property="og:title" content="Bqsoft" />
    <meta property="og:description" content="Thiết kế website, Thiết kế App Mobile, Seo tổng thể, Chuyển đổi số" />
    <meta property="og:site_name" content="Trang chủ" />
    <meta name="keywords" content="Thiết kế website, Thiết kế App Mobile, Seo tổng thể, Chuyển đổi số">
    <meta name="description" content="Thiết kế website, Thiết kế App Mobile, Seo tổng thể, Chuyển đổi số">
    <meta property="og:image" content="{{ asset('img/our-service-facebook-post.webp') }}">
    <meta property="og:url" content="{{ URL::route('homepage') }}">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/homepage.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="container-fluid bg-white p-0">

  <!-- Navbar & Hero Start -->
  <div class=" position-relative p-0">

      <div class=" py-5 hero-header mb-5">
          <div class="container my-lg-5 py-lg-5 px-lg-5">
              <div class="row flex-column-reverse flex-lg-row g-5 py-5">
                  <div class="col-lg-6 text-center text-lg-start">
                      <h1 class="text-white mb-4 animated zoomIn slogan-text">Cung cấp giải pháp chuyển đổi số tốt nhất</h1>
                      <p class="text-white pb-3 animated zoomIn banner-description">Bạn muốn chuyển đổi ý tưởng thành hiện thực trên nền tảng số hay phát triển công việc kinh doanh bằng một website thương hiệu. Hãy để chúng tôi giúp bạn.</p>
                      <a href="#our-contact" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft mt-5">Liên Hệ Ngay</a>
                  </div>
                  <div class="col-lg-6 offset-lg-0 col-8 offset-2 text-center text-lg-start">
                      <img class="img-fluid" src="img/thiet-ke-web.webp" alt="thiet ke web">
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
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/thumbnail-info-company.png" alt='Thiết kế website & app mobile'>
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
                      <a class="btn btn-outline-main-blue btn-square me-3" href="https://www.facebook.com/bqsoftvn/" target="_blank"><i class="fab fa-facebook-f"></i></a>
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

  <!-- Service Start -->
  <div class="container-xxl py-5" id="our-services">
      <div class="container px-lg-5">
          <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
              <p class="position-relative d-inline text-main-blue ps-4">Dịch vụ của chúng tôi</p>
              <h2 class="mt-2">Chúng tôi cung cấp</h2>
          </div>
          <div class="row g-4">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <img alt='icon seo' src="{{ $service->image('services_icon', 'default', ['fm' => 'png']) }}" />
                        </div>
                        <h5 class="mb-3">{{ $service->title }}</h5>
                        <p>{{ $service->description }}</p>
                        <!-- <a class="btn px-3 mt-auto mx-auto" href="#">Read More</a> -->
                    </div>
                </div>
            @endforeach
          </div>
      </div>
  </div>
  <!-- Service End -->


  <!-- Portfolio Start -->
  <!-- <div class="container-xxl py-5" id="our-projects">
      <div class="container px-lg-5">
          <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
              <p class="position-relative d-inline text-main-blue ps-4">Dự án của chúng tôi</p>
              <h2 class="mt-2">Những dự án mới triển khai</h2>
          </div>
          <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
              <div class="col-12 text-center">
                  <ul class="list-inline mb-5" id="portfolio-flters">
                      <li class="btn px-3 pe-4 active" data-filter="*">Tất cả</li>
                      <li class="btn px-3 pe-4" data-filter=".first">Design</li>
                      <li class="btn px-3 pe-4" data-filter=".second">Development</li>
                  </ul>
              </div>
          </div>
          <div class="row g-4 portfolio-container">
            @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{ $project->image('thumbnail', 'default') }}" alt="{{ $project->description }}">
                        <div class="portfolio-overlay">
                            @foreach($project->images('project_images', 'default') as $image)
                                <a class="btn btn-light" href="{{ $image }}" data-lightbox="{{ $project->title }}"><i class="fa fa-plus fa-2x text-main-blue"></i></a>
                            @endforeach
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="Thiết kế website và mobile app">{{ $project->title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
      </div>
  </div> -->
  <!-- Portfolio End -->


  <!-- Testimonial Start -->
  <div class="bg-main-blue testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container px-lg-5">
        <div class="py-5 ">
            <div class="owl-carousel testimonial-carousel">
                @foreach($reviews as $review)
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>{{ $review->description }}</p>
                        <div class="d-flex align-items-center mt-1">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ $review->image('customer_avatar', 'default') }}" style="width: 50px; height: 50px; object-fit: cover;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">{{ $review->customer_name }}</h6>
                                <small>{{ $review->customer_career_title }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
      </div>
  </div>
  <!-- Testimonial End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5" id="our-contact">
    <div class="container px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="position-relative d-inline text-main-blue ps-4">Liên hệ</p>
                    <h2 class="mt-2">Liên hệ để được tư vấn miễn phí</h2>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <form class="requires-validation" novalidate method="POST" action="{{ URL::route('send-contact') }}">
                        {{ csrf_field() }}
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Tên của bạn" name="username" required>
                                    <div class="invalid-feedback">
                                        Vui lòng nhập tên!
                                    </div>
                                    <label for="name">Tên của bạn</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email" placeholder="Email hoặc số điện thoại" name="email" required>
                                    <div class="invalid-feedback">
                                        Vui lòng nhập email hoặc sđt!
                                    </div>
                                    <label for="email">Email hoặc số điện thoại</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="select" class="form-control" id="price" placeholder="Ngân sách" name="price" required>
                                    <div class="invalid-feedback">
                                        Vui lòng nhập ngân sách!
                                    </div>
                                    <label for="subject">Ngân sách</label>
                                </div>
                            </div>
                            <!-- <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="title" placeholder="Tiêu đề" name="title" required>
                                    <div class="invalid-feedback">
                                        Vui lòng nhập tiêu đề!
                                    </div>
                                    <label for="subject">Tiêu đề</label>
                                </div>
                            </div> -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Nhập yêu cầu" id="message" style="height: 150px" name="description"></textarea>
                                    <label for="message">Bạn muốn làm Website, Mobile App hay SEO tổng thể ?</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-main-blue w-100 py-3" type="submit">Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Contact End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-main-blue btn-lg-square back-to-top"><i class="fas fa-arrow-up"></i></i></a>
</div>

    @if(session('mail_message') || session('contact_message'))
    <div class='mail-toast'>
        @if(session('mail_message'))
            <p>{{ session('mail_message') }}</p>
        @else
            <p>{{ session('contact_message') }}</p>
        @endif
        <i class="fas fa-times close-toast-mail"></i>
    </div>
    @endif

    <!-- phone call button -->
    <a href="tel:0705550553">
        <button type="submit" class='btn-phone-call'>
            <i class="fas fa-phone-alt"></i>
        </button>
    </a>

    <!-- chat zalo -->
    <div class='zalome'><a href='https://zalo.me/0705550553' target='_blank'>
        <img alt='icon zalo' src="{{ asset('/img/img-zalo.png') }}"/>
    </a></div>

   <!-- start chat messenger  -->

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

  


@endsection

@section('script')
<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "1791899111092295");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('/lib/lightbox/js/lightbox.min.js') }}"></script>

@endsection
