@extends('layouts.layout')

@section('title', 'SociAu')

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
                <a class="nav-link" href="index.html">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Sobre </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Serviços </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html"> Ajuda </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

<!-- Template -->
<div class="difficultes_section">
  <div class="container">
    <div class="custom_heading-container">
      <h2>
        Dificuldades 
      </h2>
      <hr>
    </div>
    <p>
      Escolha a dificuldade que deseja jogar:
    </p>
    <div class="layout_padding2-top">
      <div class="rowq">
        <div class="col-md-4">
          <div class="diff-box">
            <a href="index.html">
              Fácil
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="diff-box">
            <a href="index.html">
              Médio
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="diff-box">
            <a href="index.html">
              Difícil
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

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