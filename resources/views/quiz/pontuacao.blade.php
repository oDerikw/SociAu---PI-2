@extends('layouts.layout', ['title' => 'SociAU'])
@section('content')

   
    <div class="quiz_section">
      
      <div class="quiz">
        
          <br><br>
          
          <div class="star">
            <!--Step active ja foi visitado -->
            @for ($i = 0; $i < Session::get('correct_answers'); $i++)
              <span class="starIcon active">★</span>
            @endfor
            @for ($i = 0; $i < 5 - Session::get('correct_answers'); $i++)
              <span class="starIcon">★</span>
            @endfor         
              
          </div>
          <div class="finalText"> 
            <h1>Parabéns</h1>
            <h4>Voce acertou {{ Session::get('correct_answers') }}/5</h4><br>
            <a href="{{ route('endGame') }}"><img src="images/backPage.png" width="50px"></a>
            <a href="{{ route('endGame') }}"><img src="images/homeIcon.png" width="50px"></a>
          </div>
        </div>
      </div>
  </div>
</body>
@endsection