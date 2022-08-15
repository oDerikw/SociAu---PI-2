<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link rel = "shortcut icon" type="imagem/x-icon" href="/images/icon.png"/>
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>

  <!-- Refs / styles -->
  <link rel="stylesheet" type="text/css"/>
  <link href="/css/style.css" rel="stylesheet" />
  <link href="/css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
</head>

<body>
<div class="hero_area">
    <!-- Header -->
    <header class="header_section menu-urls">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">

          <a class="navbar-brander">
            <img src="/images/logo.png" width="150px">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('index') }}">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/#about') }}">Sobre </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/#services') }}">Serviços </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/#help') }}"> Ajuda </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/#contact') }}">Contato</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
  @yield('content')

  <!-- Footer -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2022 Todos os direitos reservados para 
      <a href=" {{ url('/') }}">SociAu</a>
    </p>
  </section>

  <!-- Scripts -->

  <script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
   
</html>