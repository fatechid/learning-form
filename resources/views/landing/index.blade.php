<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FATechID - [Learning-Form]</title>
    <meta name="description" content="Template with PHP as System [Backend]" />
    <meta name="keywords" content="Simple PHP for Free" />
    <meta name="author" content="Mayer Reflino" />
    <link rel="shortcut icon" href="{{ url('backend/assets/images/icons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="msapplication-config" content="./assets/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#663fb5">
    <link rel="icon" type="image/png" href="{{ url('backend/assets/images/icons/favicon-192x192.png') }}"/>
    <link rel="stylesheet" href="{{ url('backend/assets/land.io/css/landio.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css"/>
  </head>

  <body>

    <!-- Navigation
    ================================================== -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-inverse-custom">
      <div class="container">
        <a class="navbar-brand mr-auto" href="#">
          <span class="icon-logo"></span>
          <span class="sr-only">Crit-Lab</span>
        </a>

        <div class="hidden-md-up">
          <a class="navbar-toggler collapsed" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">
            <div class="sr-only">Toggle mobile navigation</div>
          </a>
        </div>

        <div id="collapsingNavbar" class="collapse navbar-toggleable-custom">
          <ul class="nav navbar-nav navbar-nav-transparent float-right">

            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="{{ url('backend/login') }}">Login</a>
            </li>

            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="{{ url('backend/register') }}" target="_blank" rel="nofollow">Register</a>
            </li>

            <!-- Profile Widget System in Dashboard -->
            <?php
              // require 'stuff-code/session.php';
            ?>

          </ul>
        </div>
      </div>
    </nav>

  

    <!-- Hero Section
    ================================================== -->

    <header class="jumbotron bg-dark d-md-flex flex-md-column justify-content-md-center align-items-md-center" role="banner">

      <div class="text-center">
        <h1 class="display-4">Learning-Form, Create Something Different.</h1>
        <h2 class="mb-5">Create a Service with our Code <em>for Free</em></h2>
        <br>
        <a class="btn btn-outline-light btn-lg btn-outline-light mb-4 mb-md-0" href="{{ url('backend/register') }}" role="button"><span class="icon-email"></span>Try Now</a>
      </div>

    </header>


    <!-- Intro
    ================================================== -->

    <section class="section-intro bg-light text-center">
      <div class="container">
        <h3 class="wp wp-1">Based on Boostrap 4 Framework</h3>
        <p class="lead wp wp-2">We use <a target="_blank" href="https://github.com/tatygrassini/landio-html">Land.io</a>, <a target="_blank" href="https://github.com/creativetimofficial/argon-design-system">Argon</a> and, <a target="_blank" href="https://colorlib.com/">Colorlib</a> Template</p>
        <img src="{{ url('backend/assets/images/mock.png') }}" alt="iPad mock" class="img-fluid wp wp-3">
      </div>
    </section>


    <!-- Features
    ================================================== -->

    <section class="section-features text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <span class="icon-heart display-4"></span>
                <h4 class="card-title">Open Source</h4>
                <h6 class="card-subtitle text-muted">Free</h6>
                <p class="card-text">Made with Open Source code from various sources [Credit below], and combined to adjust the code on each page.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <span class="icon-thunderbolt display-4"></span>
                <h4 class="card-title">Responsive</h4>
                <h6 class="card-subtitle text-muted">Design</h6>
                <p class="card-text">Elegant design that will spoil the eyes and attract the attention of visitors.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-0">
              <div class="card-body">
                <span class="icon-pen display-4"></span>
                <h4 class="card-title">Backend</h4>
                <h6 class="card-subtitle text-muted">System</h6>
                <p class="card-text">We build systems using laravel 7 which is a famous framework for PHP</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Text Content
    ================================================== -->

    <section class="section-text">
      <div class="container">
        <h3 class="text-center">Build site for personal or your industry</h3>
        <div class="row py-5 justify-content-between">
          <div class="col-md-5">
            <p class="wp wp-7">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
          </div>
          <div class="col-md-5 align-self-end separator-x">
            <p class="wp wp-8">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Sign Up
    ================================================== -->

    <section class="section-signup bg-light">
      <div class="container">
        <h3 class="text-center mb-5">Try the Code for Free in GitHub</h3>

            <div class="align-items-md-center">
              <div class="form-group">
                <a target="_blank" href="https://github.com/fatechid/learning-form" class="btn btn-outline-primary btn-block btn-lg">Learning-Form <i class="fab fa-github" aria-hidden="true"></i></a>
              </div>
            </div>
            
      </div>
    </section>


    <!-- Footer
    ================================================== -->

    <footer class="section-footer bg-dark" role="contentinfo">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-5">
            <div class="media flex-column flex-md-row">
              <span class="d-flex align-self-center align-self-md-start icon-logo"></span>
              <small class="media-body text-center text-md-left">
                &copy; Learning-Form 2019 <br>
                <a target="_blank" href="https://github.com/tatygrassini/landio-html">Land.io</a> - <a target="_blank" href="https://github.com/creativetimofficial/argon-design-system">Argon - </a><a target="_blank" href="https://colorlib.com/">Colorlib</a><br>
                recode : <b>Mayer Reflino</b>
              </small>
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav flex-column flex-md-row justify-content-md-end">
              <li class="nav-item"><a class="nav-link" href="https://www.fatechid.blog" target="_blank" rel="nofollow">FAQs Tech - Blog</a></li>
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{ url('backend/assets/land.io/js/landio.min.js') }}"></script>
  </body>
</html>