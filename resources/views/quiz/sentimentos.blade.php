@extends('layouts.layout', ['title' => 'SociAu'])
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
         {{ $question }}
         </a><br>
         <img src="{{ $image }}" height="500px">
         <div class="button-grp">
            @foreach ($alternatives as $alternative)
               <span id="{{ $alternative->id }}">
                  <a href=" {{ route('verifyAlternative', ['id' => $alternative->id]) }}">
                     <button type="submit" id="btn1">
                        {{ $alternative->alternative }}
                     </button>
                  </a>
               </span>
            @endforeach
         </div>
      </div>
   </div>
</div>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
@endsection