@extends('layouts.layout', ['title' => 'SociAu'])
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
      <div class="button-grp-diff" id="categoria2">
         <a href="{{ route('getCategoryDifficulty', ['category' => 'cotidiano', 'difficulty' => 'facil']) }}" id="btn1">Fácil</a>
         <a href="{{ route('getCategoryDifficulty', ['category' => 'cotidiano', 'difficulty' => 'medio']) }}" id="btn2">Médio</a>
         <a href="{{ route('getCategoryDifficulty', ['category' => 'cotidiano', 'difficulty' => 'dificil']) }}" id="btn3">Difícil</a>
      </div>
      <div class="diff-gif">
         <img src="/images/a-amarelinho.png" height="500px">
      </div>
   </div>
</div>
</div>

@endsection