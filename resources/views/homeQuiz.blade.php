@extends('layouts.layout')
@section('content')

    <br><br>

  <!-- Home -->
  <section class="home_section" id="help">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Modalidades
        </h2>
        <hr>
      </div>
      <p>
        Escolha a modalidade para jogar:
      </p>
      <div class="layout_padding2-top">
        <div class="rowq">
          <div class="col-md-4">
            <div class="img-box">
              <a href="{{ route('blue') }}">
                <img src="images/blocoAzul.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-box">
              <a href="{{ route('yellow') }}">
                <img src="images/blocoAmarelo.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-box">
              <a href="{{ route('pink') }}">
                <img src="images/blocoRosa.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-box">
              <a href="{{ route('green') }}">
                <img src="images/blocoVerde.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="layout_logo">
        <img class="bag_logo" src="images/logo.png" height="100px" alt="">
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