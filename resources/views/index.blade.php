@extends('layouts.layout')

@section('title', 'SociAu')

@section('content')
<div class="hero_area">
  <!-- Header -->
  <header class="header_section menu-urls">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">

        <a class="navbar-brander">
          <img src="images/logo.png" width="150px">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#index">Início </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">Sobre </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Serviços </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#help"> Ajuda </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- Slider c/ img -->
  <section class=" slider_section position-relative">

    <div class="slider_bg-container">

    </div>
    <div class="slider-container">

      <div class="detail-box">
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
        <h1>
          SociAu<br>
        </h1>
        <p>
            Sistema de aprendizado de habilidades sociais para pessoas 
          com TEA (Transtorno do Espectro Autista).<br>
          Tem como objetivo auxiliar pessoas com TEA a desenvolver 
          habilidades sociais por meio de quizzes, onde serão representadas 
          histórias sociais em formato de ilustração, perguntas e respostas.
        </p>
        <div>
          <a href="{{ url('jogar') }}" class="slider-link">
            Jogar!
          </a>
        </div>
      </div>
      <div class="img-box">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/slider-img2.jpg" alt="">
            </div>
            <div class="carousel-item">
              <img src="images/slider-img2.jpg" alt="">
            </div>
            <div class="carousel-item">
              <img src="images/slider-img2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Sobre -->
<section class="about_section layout_padding" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <h6>
            Sobre
          </h6>
          <div class="custom_heading-container">
            <h2>
              Transtorno do Espectro Autista
            </h2>
            <hr>
          </div>
          <p>
              O Transtorno do Espectro Autista é definido como uma desordem do neurodesenvolvimento, 
            tendo como uma de suas características principais a dificuldade na comunicação social. 
            Dessa forma, um dos aspectos mais comuns apresentados por pessoas no espectro é um déficit, 
            em maior ou menor grau, nesse conjunto de comportamentos sociais.
          </p>
          <div>
            <!--<a href="">
              Mais Sobre
            </a>-->
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/about-img.png" alt="">
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Serviços -->
<section class="service_section layout_padding" id="services">
  <div class="container">
    <div class="d-flex flex-column align-items-end">
      <div class="custom_heading-container">
        <hr>
        <h2>
          Serviços
        </h2>

      </div>
      <p>
        Modalidades de exercícios propostos em nosso site.
      </p>
    </div>
  </div>
  <div class="container">
    <div class="service_container layout_padding2">
      <a href="">
        <div class="box">
          <div class="img-box">
            <img src="images/s-5.png" alt="" class="img-1">
            <img src="images/s5-blue.png" alt="" class="img-2">
          </div>
          <div class="name">
            <h6>
              Quizz 1
            </h6>
          </div>
        </div>
      </a>
      <a href="">
        <div class="box">
          <div class="img-box">
            <img src="images/s-4.png" alt="" class="img-1">
            <img src="images/s4-blue.png" alt="" class="img-2">
          </div>
          <div class="name">
            <h6>
              Quizz 2
            </h6>
          </div>
        </div>
      </a>
      <a href="">
        <div class="box">
          <div class="img-box">
            <img src="images/s-5.png" alt="" class="img-1">
            <img src="images/s5-blue.png" alt="" class="img-2">
          </div>
          <div class="name">
            <h6>
              Quizz 3
            </h6>
          </div>
        </div>
      </a>
      <a href="">
        <div class="box">
          <div class="img-box">
            <img src="images/s-4.png" alt="" class="img-1">
            <img src="images/s4-blue.png" alt="" class="img-2">
          </div>
          <div class="name">
            <h6>
              Quizz 4
            </h6>
          </div>
        </div>
      </a>

    </div>
  </div>
  <div class="read-btn">
    <a href="homeQuiz.html">
      Começar
    </a>
  </div>
</section>

<!-- Especialistas -->
<section class="news_section layout_padding" id="help">
  <div class="container">
    <div class="d-flex flex-column">
      <div class="custom_heading-container">
        <h2>
          Especialistas
        </h2>
        <hr>

      </div>
      <p>
        Alguns dos profissionais que supervisionaram e ajudaram no projeto:
      </p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="box">
          <div class="img-box">
            <img src="images/n-2.jpg" alt="">
          </div>
          <div class="action-box">
            <div class="action">
              <a href="">
                <img src="images/share.png" alt="">
              </a>
            </div>
          </div>
          <div class="detail-box">
            <h4>
              Rosemeire S. P.
            </h4>
            <p>
              Rhoncus adipiscing dictumst quisque venenatis senectus congue vehicula sociosqu viverra et, 
              netus ultricies nulla ullamcorper volutpat tempus elit proin aenean.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box">
          <div class="img-box">
            <img src="images/n-3.png" alt="">
          </div>
          <div class="action-box">
            <div class="action">
              <a href="">
                <img src="images/share.png" alt="">
              </a>
            </div>
          </div>
          <div class="detail-box">
            <h4>
              Karina G.
            </h4>
            <p>
              Fermentum morbi consectetur amet est aliquam habitasse varius suscipit id, 
              bibendum velit libero placerat non tincidunt tristique nisi.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contato -->
<section class="contact_section layout_padding-bottom" id="contact">
  <div class="container">
    <div class="d-flex flex-column align-items-end">
      <div class="custom_heading-container">
        <hr>
        <h2>
          Contatos
        </h2>
      </div>
    </div>
    <div class="layout_padding-top layout_padding2-bottom">
      <div class="row">
        <div class="col-md-7">
          <form action="">
            <div class="contact_form-container">
              <div>
                <h2>
                  Nome YYY
                </h2>
                  <a>
                    <br>
                    <img src="images/telephone.png" width="25px"> : 43 99123456789
                    <br> <br>
                    <img src="images/location.png" width="20px"> : R. Antonio Saturno, 150
                  </a>
                  <br><br>
              </div>
              <div>
                <h2>
                  Nome ZZZ
                </h2>
                  <a>
                    <br>
                    <img src="images/telephone.png" width="25px"> : 45 99123456789
                    <br> <br>
                    <img src="images/location.png" width="20px"> : R. Andrade Marquis, 320
                  </a>
              </div>
            </div>

          </form>
        </div>
        <div class="col-md-5">
          <div class="map-box">
            <div id="map">
              <div class="map-responsive">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.6203917386133!2d-51.4944483849867!3d-25.384035983809596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ef362a96428765%3A0x3508ff16b1db8aaa!2sUniversidade%20Estadual%20do%20Centro%20Oeste%20-%20Campus%20Cedeteg!5e0!3m2!1spt-BR!2sbr!4v1656186944806!5m2!1spt-BR!2sbr"
                  width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact_items">

      <a>
        <div class="item ">
          <div class="img-box box-2">

          </div>
          <div class="detail-box">
            <p>
              +43 1234567890
            </p>
          </div>
        </div>
      </a>

      <a>
        <div class="item ">
          <div class="img-box box-3">

          </div>
          <div class="detail-box">
            <p>
              SociAu@gmail.com
            </p>
          </div>
        </div>
      </a>

      <a href="https://goo.gl/maps/gP5yH2E24nxQRqQH9">
        <div class="item ">
          <div class="img-box box-1">

          </div>
          <div class="detail-box">
            <p>
              Endereço
            </p>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- Infos -->
<section class="info_section layout_padding">
  <div class="container">
    <div class="info_social">
      <div>
        <a href="">
          <img src="images/fb.png" alt="">
        </a>
      </div>
      <div>
        <a href="">
          <img src="images/twitter.png" alt="">
        </a>
      </div>
      <div>
        <a href="">
          <img src="images/insta.png" alt="">
        </a>
      </div>
    </div>
    <div>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
      </p>
    </div>
  </div>
</section>
@endsection