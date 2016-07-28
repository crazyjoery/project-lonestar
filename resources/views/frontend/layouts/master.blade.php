<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="_token" content="{{ csrf_token() }}" />
  <title>@yield('title')</title>
 
  <meta name="description" content="Gaming Community Web Platform designed by JP IT">
  <meta name="author" content="Joery Pigmans">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <!-- Icon -->
  <link rel="icon" type="image/png" href="../assets/youplay/images/icon.png">
 
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
 
    {{ Html::style('css/fonts/font-awesome/font-awesome.min.css') }}
    {{ Html::style('css/bootstrap.min.css') }}
    {{ Html::style(elixir('css/frontend.css')) }}

  <!--[if lt IE 9]>
      <script src="../assets/plugins/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
@include('frontend.includes.nav')

    <section class="content-wrap">
 
  <!-- Banner -->
  <div class="youplay-banner banner-top youplay-banner-parallax">
    @yield('banner')
  </div>
  <!-- /Banner -->
 
 
  <div class="container youplay-content">
    @yield('content')
  </div>
 
    <footer class="youplay-footer-parallax">
  <div class="wrapper" style="background-image: url('assets/images/footer-bg.jpg')">
 
    <!-- Social Buttons -->
    <div class="social">
      <div class="container">
        <h3>Connect socially with <strong>Lone Star Warriors</strong></h3>
 
        <div class="row icons">
          <div class="col-xs-6 col-sm-3">
            <a href="#!">
              <i class="fa fa-facebook-square"></i>
              <span>Like on Facebook</span>
            </a>
          </div>
          <div class="col-xs-6 col-sm-3">
            <a href="#!">
              <i class="fa fa-twitter-square"></i>
              <span>Follow on Twitter</span>
            </a>
          </div>
          <div class="col-xs-6 col-sm-3">
            <a href="#!">
              <i class="fa fa-google-plus-square"></i>
              <span>Follow on Google+</span>
            </a>
          </div>
          <div class="col-xs-6 col-sm-3">
            <a href="#!">
              <i class="fa fa-youtube-square"></i>
              <span>Watch on Youtube</span>
            </a>
          </div>
        </div>
 
      </div>
    </div>
    <!-- /Social Buttons -->
 
    <!-- Copyright -->
    <div class="copyright">
      <div class="container">
        <strong>JP IT</strong> © 2016. All rights reserved
      </div>
    </div>
 
  </div>
</footer>
 
</section>
<!-- /Main Content -->
<!-- Scripts -->
{!! Html::script('js/vendor/bootstrap/bootstrap.min.js') !!}
{!! Html::script(elixir('js/frontend.js')) !!}

<!-- Initialize youplay effects -->
<script>
  youplay.init();
</script>

</body>
</html>