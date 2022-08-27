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

   
    <div class="quiz_section">
      <div class="quiz">
        <div class="topoQuiz">
          <div class="quiz_categoria">
              <a>
                  Empatia
              </a>
          </div>
          <div class="barra">
            <!--Step active ja foi visitado -->
            <div class= "step active">
              <div class= "--number"></div>
            </div>
            <div class= "step active">
              <div class= "--number"></div>
            </div>
            <div class= "step active">
              <div class= "--number"></div>
            </div>
            <!--Step não foi visitado -->
            <div class= "step">
              <div class= "--number"></div>
            </div>
            <div class= "step">
              <div class= "--number"></div>
            </div>
              
          </div>
        </div>
          <br><br>
          <div class="pergunta">
              <a>
                  {{ $question }}
              </a>
              <img src="{{ url("storage/$image") }}" height="500px">
              <div class="button-grp">
                @foreach ($alternatives as $alternative)
                  <button id="btn1" value="{{ $alternative }}"><span id="choice0">{{ $alternative }}</span></button>
                @endforeach
              </div>
          </div>
      </div>
  </div>
</body>
@endsection