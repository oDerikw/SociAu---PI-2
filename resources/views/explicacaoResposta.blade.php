@extends('layouts.layout')
@section('content')


    <div class="quiz_section">

      <div class="quiz">

        <br><br>

        <div class="window">
          
          <h1>Resposta Correta!</h1>
          <div class="textoExplicacao">Se o seu amigo tiver olhando voce comer, seria uma boa alternativa dividir com
            ele ou perguntar se ele quer um pedaço.</div>
          <div class="centroExplicacao">
            <img src="/images/a-azul.png" height="300px">
          </div>
          <br>
          <div class="next">
            <a href="{{ route('pontuacao') }}">
              <img src="/images/nextPage.png" height="50px">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection