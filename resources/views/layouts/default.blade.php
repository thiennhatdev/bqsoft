<?php
function removeWhitespace($buffer)
{
    return preg_replace('/\s+/', ' ', $buffer);
}

?>

<?php ob_start("removeWhitespace");  ?>
   
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/ico/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/ico/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/ico/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/img/ico/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/img/ico/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Fontawesome -->
    <link href="{{ asset('/lib/font-awesome/css/all.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/header.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/footer.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/common.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" />
    
    @yield('head')
</head>

<body>
    @include('components.includes.header')    

      <!-- Full Screen Search Start -->
      <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                  <form action="{{ URL::route('action-search') }}" method="POST" class="search-form">    
                    {{ csrf_field() }}
                    <div class="input-group">
                      <input name="input-search" type="text" class="form-control bg-transparent border-light p-3" placeholder="Tìm kiếm bài viết">
                      <button class="btn btn-light px-4" type="submit">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
      </div>
      <!-- Full Screen Search End -->

    @yield('content')
    

    @include('components.includes.footer')

    <!-- <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0" nonce="ddMh2paa"></script> -->
    
  <!-- JavaScript Libraries -->
  <script src="{{ asset('/lib/jquery/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/lib/isotope/isotope.pkgd.min.js') }}"></script>
    
  <script src="{{ asset('/lib/bootstrap/bootstrap.bundle.min.js') }}"></script>
  
  <!-- Template Javascript -->
  <script src="{{ asset('/js/main.js') }}"></script>

  <!-- start google analytics tracking -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-14N6GJLR3E"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-14N6GJLR3E');
  </script>
  <!-- end google analytics tracking -->

  <!-- Your SDK code -->
    <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v17.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

    @yield('script')
</body>

</html>
<?php ob_end_flush(); ?>