@extends('layouts.layout')
@section('content')
    <div class="quiz_section" id="categoria4">
      <div class="quiz">
        <div class="topoQuiz">
          <div class="quiz_categoria" id="categoria4">
            <a>
              Dia a Dia
            </a>
          </div>
          <div class="barra" id="categoria4">
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
          <img src="/images/img4.png" height="500px">
          <div class="button-grp" id="categoria4">
            <a href="{{ route('explicacao') }}">
              <button id="btn13"><span id="choice0">Rir</span></button>
            </a>
            <a href="{{ route('explicacao') }}">
              <button id="btn14"><span id="choice1">Oferecer ajuda</span></button>
            </a>
            <a href="{{ route('explicacao') }}">
              <button id="btn15"><span id="choice2">Gritar</span></button>
            </a>
            <a href="{{ route('explicacao') }}">
              <button id="btn16"><span id="choice3">Sair Correndo</span></button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection