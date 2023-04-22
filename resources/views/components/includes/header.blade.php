<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
  <div class="container-xxl px-lg-5">
    <a href="" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-search me-2"></i>SEO<span class="fs-5">Master</span></h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ URL::route('homepage') }}" class="nav-item nav-link active">Trang chủ</a>
            <a href="{{ URL::route('about') }}" class="nav-item nav-link">Về chúng tôi</a>
            <a href="{{ URL::route('services') }}" class="nav-item nav-link"> Dịch vụ</a>
            <a href="{{ URL::route('projects') }}" class="nav-item nav-link">Dự án</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> --}}
            <a href="contact.html" class="nav-item nav-link">Bài viết</a>
        </div>
        <button type="button" class="btn text-main-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
    </div>
  </div>
</nav>