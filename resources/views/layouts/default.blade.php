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
    <meta name="robots" content="noindex">
    <title>@yield('title')</title>
    <!-- <link rel="shortcut icon" href="{{ asset('source/img/logo.png') }}" type="image/x-icon" /> -->
    
    <!-- Google Web Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Icon Font Stylesheet -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->

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
    
    <!-- Messenger Plugin chat Code -->
    <!-- <div id="fb-root"></div> -->

    <!-- Your Plugin chat code -->
    <!-- <div id="fb-customer-chat" class="fb-customerchat">
    </div> -->

    <!-- phone call button -->
    <form action="tel:917387084384">
        <button type="submit" class='btn-phone-call'>
          <i class="fas fa-phone-alt"></i>
        </button>
    </form>

    <!-- chat zalo -->
    <div class="zalo-chat-widget" data-oaid="513507143261790428" data-welcome-message="Chào bạn! Bqsoft giúp gì được không ?" data-autopopup="0" data-width="" data-height=""></div>

    <script src="https://sp.zalo.me/plugins/sdk.js"></script>

  <!-- start chat messenger  -->

  <!-- Messenger Plugin chat Code -->
  <div id="fb-root"></div>

  <!-- Your Plugin chat code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "1791899111092295");
    chatbox.setAttribute("attribution", "biz_inbox");
  </script>

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

  <!-- end chat messenger -->

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0" nonce="ddMh2paa"></script>
    
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

    @yield('script')
</body>

</html>
<?php ob_end_flush(); ?>