<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
  <div class="container-xxl px-lg-5 position-relative">
    <a href="{{ URL::route('homepage') }}" class="navbar-brand p-0">
        <img src="{{ asset('img/logo.svg') }}" alt="Trang chủ">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ URL::route('homepage') }}" class="nav-item nav-link {{ Route::currentRouteNamed( 'homepage' ) ?  'active' : '' }}">Trang chủ</a>
            <a href="{{ URL::route('about') }}" class="nav-item nav-link {{ Route::currentRouteNamed( 'about' ) ?  'active' : '' }}">Về chúng tôi</a>
            <a href="{{ URL::route('homepage') . '#our-services' }}" class="nav-item nav-link "> Dịch vụ</a>
            <!-- <a href="{{ URL::route('homepage') . '#our-projects' }}" class="nav-item nav-link">Dự án</a> -->
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> -->
            <a href="{{ URL::route('homepage') . '#our-contact' }}" class="nav-item nav-link">Liên hệ</a>
            <a href="{{ URL::route('news') }}" class="nav-item nav-link {{ Route::currentRouteNamed( 'news' ) ?  'active' : '' }}">Bài viết</a>
        </div>
        <button type="button" class="btn text-main-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
    </div>
  </div>
</nav>