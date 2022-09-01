@extends('layouts.layout')
@section('content')
  

  <!-- Header Desc -->
  <div class="difficultes_section">
    <div class="container">
      <div class="custom_heading-container-yellow">
        <h2>
          Dificuldades 
        </h2>
        <hr>
      </div>
      <p>
        Escolha a dificuldade que deseja jogar:
      </p>
    </div>
  </div>
  
  <!-- Bottons -->
  <div class="quiz_section_yellow">
    <div class="quiz">
<<<<<<< HEAD
            <div class="button-grp-diff">
              <a href="{{ route('getCategoryDifficulty', ['category' => 'cotidiano', 'difficulty' => 'facil']) }}" id="btn1">Fácil</a>
              <a href="{{ route('getCategoryDifficulty', ['category' => 'cotidiano', 'difficulty' => 'medio']) }}" id="btn2">Médio</a>
              <a href="{{ route('getCategoryDifficulty', ['category' => 'cotidiano', 'difficulty' => 'dificil']) }}" id="btn3">Difícil</a>
=======
            <div class="button-grp-diff" id="categoria2">
              <a href="{{ route('quiz2') }}" id="btn5">Fácil</span></a>
              <a href="{{ route('quiz2') }}" id="btn6">Médio</span></a>
              <a href="{{ route('quiz2') }}" id="btn7">Difícil</span></a>
>>>>>>> d9541fa0589c9bbf81373a05088acdb5fcff854c
            </div>
            <div class="diff-gif">
              <img src="/images/a-amarelinho.png" height="500px">
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