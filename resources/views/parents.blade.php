@extends('layouts.layout')
@section('content')
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

    <br><br>

  <!-- Text -->
  <section class="portfolio_section" id="help">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Para os pais...
        </h2>
        <hr>
      </div>
      <p>
        Algumas informações básicas que em caso de uso do sistema sem supervisão profissional, podem ser adquiridas.
      </p>
    </div>
  </section>

  <!-- Info 1 -->
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
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="/images/about-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Info 2 -->
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
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="/images/about-img.png" alt="">
          </div>
        </div>
      </div>

    </div>
  </section>

  <br><br>

  <!-- Infos -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_social">
        <div>
          <a href="">
            <img src="/images/fb.png" alt="">
          </a>
        </div>
        <div>
          <a href="">
            <img src="/images/twitter.png" alt="">
          </a>
        </div>
        <div>
          <a href="">
            <img src="/images/insta.png" alt="">
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