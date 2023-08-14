<!-- Footer Start -->
 <div class="container-fluid bg-main-blue text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5 px-lg-5">
      <div class="row g-5">
          <div class="col-md-6 col-lg-4">
              <h5 class="text-main-secondary mb-4">Liên lạc</h5>
              <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $about->address ?? "" }}</p>
              <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $about->phone_number ?? "" }}</p>
              <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $about->email ?? "" }}</p>
              <!-- <div class="d-flex pt-2">
                  <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                  <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                  <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
              </div> -->
          </div>
          <div class="col-md-6 col-lg-4">
              <h5 class="text-main-secondary mb-4">Link</h5>
              <p>
                <i class="fas fa-hand-point-right"></i>
                <a class="text-white mx-2" href="https://bqsoft.vn/tin-tuc/tin95-tai-sao-doanh-nghiep-cua-ban-can-co-mot-website-dich-vu-thiet-ke-website-chuyen-nghiep-tai-bqsoft.html">
                    Thiết kế website
                </a>
              </p>
              <p>
                <i class="fas fa-hand-point-right"></i>
                <a class="text-white mx-2" href="https://bqsoft.vn/tin-tuc/tin96-thiet-ke-app-mobile-la-gi-tai-sao-nen-chon-bqsoft-de-thiet-ke-app.html">
                    Thiết kế Mobile App
                </a>
              </p>
              <p>
                <i class="fas fa-hand-point-right"></i>
                <a class="text-white mx-2" href="https://bqsoft.vn/tin-tuc/tin98-seo-tong-the-la-gi-nhung-dieu-quan-trong-khi-thue-dich-vu-seo-tong-the-cho-website.html">
                SEO tổng thể
                </a>
              </p>
              <p>
                <i class="fas fa-hand-point-right"></i>
                <a class="text-white mx-2" href="{{ URL::route('courses-frontend') }}">
                    Khoá học lập trình Frontend
                </a>
              </p>
              <p>
                <i class="fas fa-hand-point-right"></i>
                <a class="text-white mx-2" href="{{ URL::route('courses-backend') }}">
                    Khoá học lập trình Backend
                </a>
              </p>
              <p>
                <i class="fas fa-hand-point-right"></i>
                <a class="text-white mx-2" href="{{ URL::route('courses-fullstack') }}">
                Khoá học lập trình Fullstack
                </a>
              </p>
              <p>
                <i class="fas fa-hand-point-right"></i>
                <a class="text-white mx-2" href="{{ URL::route('courses-reactnative') }}">
                Khoá học lập trình Mobile (React native)
                </a>
              </p>
              
              <!-- <a class="btn btn-link" href="#">About Us</a> -->
              <!-- <a class="btn btn-link" href="#">Contact Us</a>
              <a class="btn btn-link" href="#">Privacy Policy</a>
              <a class="btn btn-link" href="#">Terms & Condition</a>
              <a class="btn btn-link" href="#">Career</a> -->
          </div>
          <div class="col-md-6 col-lg-4">
              <h5 class="text-main-secondary mb-4">Fanpage</h5>
              <div class="row g-2">
              <div class="fb-page" data-href="https://www.facebook.com/bqsoftvn/" data-tabs="timeline" data-width="250" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bqsoftvn/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bqsoftvn/">Bqsoft</a></blockquote></div>
              </div>
          </div>
      </div>
  </div>
  <div class="container px-lg-5">
      <div class="copyright">
          <div class="row">
              <div class="col-md-6 text-center text-md-start">
                <div class="d-flex py-2">
                    <a class="btn btn-outline-light btn-social" href="https://twitter.com/Bqsoftvn" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/bqsoftvn/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/vonhat11/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/bqsoft-vn-48ab44278/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
              <div class="col-md-6 text-center text-md-end">
                  <!-- <div class="footer-menu">
                      <a href="#">Home</a>
                      <a href="#">Cookies</a>
                      <a href="#">Help</a>
                      <a href="#">FQAs</a>
                  </div> -->
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Footer End -->