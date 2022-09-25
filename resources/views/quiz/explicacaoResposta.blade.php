@extends('layouts.layout', ['title' => 'SociAu'])
@section('content')


    <div class="quiz_section">

      <div class="quiz">

        <br><br>

        <div class="window">
          
          <h1>Infelizmente sua resposta está incorreta</h1>
          <div class="textoExplicacao">{{ Session::get('explanation') }}</div>
          <div class="centroExplicacao">
            <img src="/images/a-azul.png" height="300px">
          </div>
          <br>
          <div class="next">
            <h1>{{ Session::get('incorrect_answers') }}</h1>
            <h1>{{ Session::get('correct_answers') }}</h1>
              <a href="{{ route('retrieveQuestion') }}">
                <img src="/images/nextPage.png" height="50px">
              </a> 
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection