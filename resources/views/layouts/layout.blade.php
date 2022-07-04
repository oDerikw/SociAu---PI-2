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