@extends('layouts.default')

@section('title')
Trang chủ
@endsection

@section('head')
  
  <!-- Libraries Stylesheet -->
  <link href="{{ asset('/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <link href="{{ asset('/css/homepage.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="container-fluid bg-white p-0">
  <!-- Spinner Start -->
  {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-main-blue" style="width: 3rem; height: 3rem;" role="status">
          <span class="sr-only">Loading...</span>
      </div>
  </div> --}}
  <!-- Spinner End -->


  <!-- Navbar & Hero Start -->
  <div class=" position-relative p-0">

      <div class=" py-5 hero-header mb-5">
          <div class="container my-5 py-5 px-lg-5">
              <div class="row flex-column-reverse flex-lg-row g-5 py-5">
                  <div class="col-lg-6 text-center text-lg-start">
                      <h1 class="text-white mb-4 animated zoomIn">Cung cấp giải pháp chuyển đổi số tốt nhất !</h1>
                      <p class="text-white pb-3 animated zoomIn">Chuyển đổi ý tưởng thành hiện thực trên nền tảng số, hãy để chúng tôi giúp bạn.</p>
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
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/thumbnail-info-company.png">
            </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="section-title position-relative mb-4 pb-2">
                      <h6 class="position-relative text-main-blue ps-4">Về chúng tôi</h6>
                      <h2 class="mt-2">Chúng tôi là nhà cung cấp hàng đầu các giải pháp chuyển đổi kỹ thuật số.</h2>
                  </div>
                  <p class="mb-4 company-about-content">Với kinh nghiệm và chuyên môn của đội ngũ chuyên gia, chúng tôi cam kết cung cấp các giải pháp tốt nhất cho khách hàng, từ phân tích, đánh giá nhu cầu đến thiết kế và triển khai hệ thống. Chúng tôi tin rằng chuyển đổi kỹ thuật số có thể giúp các công ty tiết kiệm thời gian và tiền bạc, tăng hiệu quả và cải thiện khả năng cạnh tranh trên thị trường.</p>
                  <div class="row g-3">
                      <div class="col-sm-6">
                          <h6 class="mb-3"><i class="fa fa-check text-main-blue me-2"></i>Lấy khách hàng là trung tâm</h6>
                          <h6 class="mb-0"><i class="fa fa-check text-main-blue me-2"></i>Đội ngũ giàu kinh nghiệm</h6>
                      </div>
                      <div class="col-sm-6">
                          <h6 class="mb-3"><i class="fa fa-check text-main-blue me-2"></i>Hỗ trợ 24/7</h6>
                          <h6 class="mb-0"><i class="fa fa-check text-main-blue me-2"></i>Chất lượng là ưu tiên hàng đầu</h6>
                      </div>
                  </div>
                  <div class="d-flex align-items-center mt-4">
                      <a class="btn btn-main-blue rounded-pill px-4 me-3" href="">Read More</a>
                      <a class="btn btn-outline-main-blue btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-outline-main-blue btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-outline-main-blue btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                      <a class="btn btn-outline-main-blue btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
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
                      <form method="POST" action="{{ URL::route('save-mail') }}">
                        {{ csrf_field() }}
                        <input name="email" class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Địa chỉ email của bạn" style="height: 48px;">
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
              <h6 class="position-relative d-inline text-main-blue ps-4">Dịch vụ của chúng tôi</h6>
              <h2 class="mt-2">Chúng tôi cung cấp</h2>
          </div>
          <div class="row g-4">
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                      <div class="service-icon flex-shrink-0">
                          <img alt='icon seo' src="{{ asset('img/icon-seo.png') }}" />
                      </div>
                      <h5 class="mb-3">Giải pháp SEO tổng thể</h5>
                      <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                      <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                  <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                      <div class="service-icon flex-shrink-0">
                        <img alt='icon website' src="{{ asset('img/icon-website.webp') }}" />
                      </div>
                      <h5 class="mb-3">Thiết kế website</h5>
                      <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                      <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                  <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                      <div class="service-icon flex-shrink-0">
                        <img alt='icon app mobile' src="{{ asset('img/icon-app.svg') }}" />
                      </div>
                      <h5 class="mb-3">Thiết kế App Mobile</h5>
                      <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                      <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                      <div class="service-icon flex-shrink-0">
                        <img alt='icon logo & banner' src="{{ asset('img/icon-design.webp') }}" />
                      </div>
                      <h5 class="mb-3">Thiết kế logo và banner</h5>
                      <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                      <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                  <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                      <div class="service-icon flex-shrink-0">
                        <img alt='icon desktop' src="{{ asset('img/icon-desktop.png') }}" />
                      </div>
                      <h5 class="mb-3">Xây dựng ứng dụng desktop</h5>
                      <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                      <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                  <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                      <div class="service-icon flex-shrink-0">
                        <img alt='icon tool' src="{{ asset('img/icon-tool.webp') }}" />
                      </div>
                      <h5 class="mb-3">Tool hỗ trợ</h5>
                      <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                      <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Service End -->


  <!-- Portfolio Start -->
  <div class="container-xxl py-5" id="our-projects">
      <div class="container px-lg-5">
          <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="position-relative d-inline text-main-blue ps-4">Dự án của chúng tôi</h6>
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
              <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                  <div class="position-relative rounded overflow-hidden">
                      <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                      <div class="portfolio-overlay">
                          <a class="btn btn-light" href="img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-main-blue"></i></a>
                          <div class="mt-auto">
                              <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                              <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                  <div class="position-relative rounded overflow-hidden">
                      <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                      <div class="portfolio-overlay">
                          <a class="btn btn-light" href="img/portfolio-2.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-main-blue"></i></a>
                          <div class="mt-auto">
                              <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                              <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                  <div class="position-relative rounded overflow-hidden">
                      <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                      <div class="portfolio-overlay">
                          <a class="btn btn-light" href="img/portfolio-3.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-main-blue"></i></a>
                          <div class="mt-auto">
                              <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                              <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                  <div class="position-relative rounded overflow-hidden">
                      <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                      <div class="portfolio-overlay">
                          <a class="btn btn-light" href="img/portfolio-4.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-main-blue"></i></a>
                          <div class="mt-auto">
                              <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                              <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.3s">
                  <div class="position-relative rounded overflow-hidden">
                      <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                      <div class="portfolio-overlay">
                          <a class="btn btn-light" href="img/portfolio-5.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-main-blue"></i></a>
                          <div class="mt-auto">
                              <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                              <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                  <div class="position-relative rounded overflow-hidden">
                      <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                      <div class="portfolio-overlay">
                          <a class="btn btn-light" href="img/portfolio-6.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-main-blue"></i></a>
                          <div class="mt-auto">
                              <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                              <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Portfolio End -->


  <!-- Testimonial Start -->
  <div class="bg-main-blue testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container px-lg-5">
        <div class="py-5 ">
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="text-white mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="text-white mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="text-white mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="text-white mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
  <!-- Testimonial End -->


  <!-- Team Start -->
  <!-- <div class="container-xxl py-5">
      <div class="container px-lg-5">
          <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="position-relative d-inline text-main-blue ps-4">Our Team</h6>
              <h2 class="mt-2">Meet Our Team Members</h2>
          </div>
          <div class="row g-4">
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="team-item">
                      <div class="d-flex">
                          <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                              <a class="btn btn-square text-main-blue bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square text-main-blue bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-square text-main-blue bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                              <a class="btn btn-square text-main-blue bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                          </div>
                          <img class="img-fluid rounded w-100" src="img/team-1.jpg" alt="">
                      </div>
                      <div class="px-4 py-3">
                          <h5 class="fw-bold m-0">Jhon Doe</h5>
                          <small>CEO</small>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="team-item">
                      <div class="d-flex">
                          <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                              <a class="btn btn-square text-main-blue bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square text-main-blue bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-square text-main-blue bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                              <a class="btn btn-square text-main-blue bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                          </div>
                          <img class="img-fluid rounded w-100" src="img/team-2.jpg" alt="">
                      </div>
                      <div class="px-4 py-3">
                          <h5 class="fw-bold m-0">Emma William</h5>
                          <small>Manager</small>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                  <div class="team-item">
                      <div class="d-flex">
                          <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                              <a class="btn btn-square text-main-blue bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square text-main-blue bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-square text-main-blue bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                              <a class="btn btn-square text-main-blue bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                          </div>
                          <img class="img-fluid rounded w-100" src="img/team-3.jpg" alt="">
                      </div>
                      <div class="px-4 py-3">
                          <h5 class="fw-bold m-0">Noah Michael</h5>
                          <small>Designer</small>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div> -->
  <!-- Team End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5" id="our-contact">
    <div class="container px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-main-blue ps-4">Liên hệ</h6>
                    <h2 class="mt-2">Chúng tôi sẽ liên hệ lại chậm nhất trong vòng 24h</h2>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Tên của bạn">
                                    <label for="name">Tên của bạn</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email của bạn">
                                    <label for="email">Email của bạn</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="select" class="form-control" id="subject" placeholder="Ngân sách">
                                    <label for="subject">Ngân sách</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Tiêu đề">
                                    <label for="subject">Tiêu đề</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Nhập yêu cầu" id="message" style="height: 150px"></textarea>
                                    <label for="message">Yêu cầu của bạn</label>
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
  <a href="#" class="btn btn-lg btn-main-blue btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
</div>

@if(session('mail_message'))
  <div class='mail-toast'>
    <p>{{ session('mail_message') }}</p>
    <i class="bi bi-x close-toast-mail"></i>
  </div>
@endif()

@endsection

@section('script')
  <!-- JavaScript Libraries -->
  <script src="{{ asset('/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('/lib/lightbox/js/lightbox.min.js') }}"></script>

@endsection
