@extends('layouts.layout')
@section('content')
    <div class="quiz_section" id="categoria3">
      <div class="quiz">
        <div class="topoQuiz">
          <div class="quiz_categoria" id="categoria3">
            <a>
              Sentimentos
            </a>
          </div>
          <div class="barra" id="categoria3">
            <!--Step active ja foi visitado -->
            <div class="step active">
              <div class="--number"></div>
            </div>
            <div class="step active">
              <div class="--number"></div>
            </div>
            <div class="step active">
              <div class="--number"></div>
            </div>
            <!--Step não foi visitado -->
            <div class="step">
              <div class="--number"></div>
            </div>
            <div class="step">
              <div class="--number"></div>
            </div>

          </div>
        </div>
        <br><br>
        <div class="pergunta">
          <a>
            Quando você está triste, o que você pode fazer?
          </a><br>
          <img src="/images/img3.png" height="500px">
          <div class="button-grp" id="categoria3">
            <a href="{{ route('explicacao') }}">
              <button id="btn9"><span id="choice0">Se machucar</span></button>
            </a>
            <a href="{{ route('explicacao') }}">
              <button id="btn10"><span id="choice1">Fazer uma atividade que gosta</span></button>
            </a>
            <a href="{{ route('explicacao') }}">
              <button id="btn11"><span id="choice2">Se trancar no quarto sozinho</span></button>
            </a>
            <a href="{{ route('explicacao') }}">
              <button id="btn12"><span id="choice3">Sair sem avisar ninguém</span></button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection