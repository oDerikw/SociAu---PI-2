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
         </a>
         <img src="{{ '/storage/'.$image }}" height="500px">
         <div class="button-grp">
            <form action="" method="post"></form>
            @csrf
            @foreach ($alternatives as $alternative)
            <span id="{{ $alternative->id }}"></span><button type="submit" id="btn1">{{ $alternative->alternative }}</button>
            @endforeach
         </div>
      </div>
   </div>
</div>
</div>
</div>
</body>
@endsection