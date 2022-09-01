@extends('layouts.layout', ['title' => 'SociAu'])
@section('content')
  
  <!-- Header Desc -->
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
    </div>
  </div>
  
  <!-- Bottons -->
  <div class="quiz_section">
    <div class="quiz">
            <div class="button-grp-diff">
                <a href="{{ route('getCategoryDifficulty', ['category' => 'empatia', 'difficulty' => 'facil']) }}" id="btn1">Fácil</a>
                <a href="{{ route('getCategoryDifficulty', ['category' => 'empatia', 'difficulty' => 'medio']) }}" id="btn2">Médio</a>
                <a href="{{ route('getCategoryDifficulty', ['category' => 'empatia', 'difficulty' => 'dificil']) }}" id="btn3">Difícil</a>
            </div>
            <div class="diff-gif">
              <img src="/images/a-azul.png" height="500px">
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