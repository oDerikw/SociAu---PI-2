@extends('layouts.layout')
@section('content')
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
              <img src="/images/img1.png" height="500px">
              <div class="button-grp" id="categoria1">
            <a href="{{ route('explicacao') }}">
              <button id="btn1"><span id="choice0">Rir</span></button>
            </a>
            <a href="{{ route('explicacao') }}">
              <button id="btn2"><span id="choice1">Oferecer ajuda</span></button>
            </a>
            <a href="{{ route('explicacao') }}">
              <button id="btn3"><span id="choice2">Gritar</span></button>
            </a>
            <a href="{{ route('explicacao') }}">
              <button id="btn4"><span id="choice3">Sair Correndo</span></button>
            </a>
          </div>
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