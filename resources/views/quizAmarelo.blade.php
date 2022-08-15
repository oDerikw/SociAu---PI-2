@extends('layouts.layout')
@section('content')

    <div class="quiz_section" id="categoria2">
      <div class="quiz">
        <div class="topoQuiz">
          <div class="quiz_categoria" id="categoria2">
            <a>
              Dia a Dia
            </a>
          </div>
          <div class="barra" id="categoria2">
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
            Você está comendo ao lado de um amigo, o que você pode fazer?
          </a><br>
          <img src="/images/img3.png" height="500px">
          <div class="button-grp" id="categoria2">
            <a href="{{ route('explicacao') }}">
              <button id="btn5"><span id="choice0">Rir</span></button>
            </a>
            <a href="{{ route('explicacao') }}">
              <button id="btn6"><span id="choice1">Oferecer ajuda</span></button>
            </a>
            <a href="{{ route('explicacao') }}">
              <button id="btn7"><span id="choice2">Gritar</span></button>
            </a>
            <a href="{{ route('explicacao') }}">
              <button id="btn8"><span id="choice3">Sair Correndo</span></button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection