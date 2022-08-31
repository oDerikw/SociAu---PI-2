<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel = "shortcut icon" type = "imagem/x-icon" href = "images/icon.png"/>

  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SociAu</title>

  <!-- Refs / styles -->
  <link rel="stylesheet" type="text/css"/>
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="hero_area">
    <!-- Header -->
    <header class="header_section menu-urls">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">

          <a class="navbar-brander">
            <img src="images/logo.png" width="150px">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Sobre </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Serviços </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html"> Ajuda </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Contato</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

   
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
              <img src="images/meninaChorando.png" height="500px">
              <div class="button-grp">
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
          </div>
      </div>
  </div>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
