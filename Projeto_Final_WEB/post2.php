<?php 
  //session_start();
  include("verifica_login.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistema apresentado à disciplina de Prejeto de Sistema Web 2018.2">
  <meta name="author" content="Leonardo Feitosa Nogueira">
 <link rel="shortcut icon" type="image/x-icon" href="imagens/iflogo.ico">

  <title>Publicação de TCCs</title>

  <!-- Framework Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

    <!-- Framework jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <!-- Script auxiliar para o Framework Bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  
  <style type="text/css">
     #resumo{
        text-align: center;
        font-weight: bold;
        font-size: 15pt;
     }
  </style>
  </head>

  <body>

    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="https://dl.acm.org/dl.cfm" target="_blank">ACM Digital Library</a>
        <a class="navbar-brand" href="https://ieeexplore.ieee.org/Xplore/home.jsp" target="_blank">IEEE Xplore Digital Library</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Página de cabeçalho -->
    <header class="masthead" style="background-image: url('imagens/img/pablo_posit_on_postit.png')">
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h3>REDE NEURAL ARTIFICIAL PARA RECONHECIMENTO DE TABELA DE HORÁRIOS DE ARME &frasl; DESARME NO SISTEMA SIGMA</h3>
              <h2 class="subheading">UNIVERSIDADE DO VALE DO ITAJAÍ</h2>
              <span class="meta">DANIEL FALQUETO</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Conteúdo do post -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p id="resumo">RESUMO</p>
           <p align="justify">Atualmente, um dos grandes problemas das empresas de monitoramento de alarmes é a grande quantidade de eventos (sinais emitidos pelas centrais de clientes) que não representam periculosidade. Dependendo do tipo de política de monitoramento da empresa esses eventos de menor importância podem estar desviando um operador do sistema de algum outro evento de maior importância. O sistema (SIGMA) analisado possui uma tabela de horários pré-configurada, onde o cliente pode definir o comportamento de sua central durante as 24 horas do dia e os 7 dias da semana. A partir do momento em que essa tabela é devidamente configurada e colocada em funcionamento, o sistema verifica de minuto em minuto se a central está se comportando conforme a tabela de horários e gera algum tipo de evento caso a central não esteja seguindo o padrão pré-configurado. A idéia de poder controlar os horários que a central deve estar Armada/Desarmada é excelente, porém a não tolerância de períodos de arme/desarme da central gera no sistema um contingente de eventos muito grande. A solução sugerida para minimizar esse contingente de eventos foi através das redes neurais artificiais, fazer com essas tabelas de horários dos clientes sejam re-configuradas estudando o comportamento dos eventos de ARME/DESARME durante um determinado tempo. A rede neural utilizada foi a MLP, com 48 neurônios na camada de entrada, 15 neurônios na camada escondida e 8 na camada de saída. A Rede Neural Artificial do tipo MLP (Multi Layer Perceptron) treinada apresentou uma taxa de 0,001 de erro.</p>

           <p><strong>Palavras-chave:</strong> Redes Neurais. Monitoramento de Alarmes. Horários.</p>
 
            <p id="baixar"><a href="files/REDE-NEURAL-ARTIFICIAL-PARA-RECONHECIMENTO-DE-TABELA-DE-HORARIOS-DE-ARME-DESARME-NO-SISTEMA-SIGMA.pdf" download>Download PDF</a></p>
          </div>
        </div>
      </div>
    </article>

    <hr>

    <!-- Rodapé -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
        <!-- Link Instagram -->
                <a href="https://www.instagram.com/leo_feitoza97/" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
        <!-- Link Facebook -->
                <a href="https://www.facebook.com/LeoFeitosa1997" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
        <!-- Link Github -->
                <a href="https://github.com/Leonardo-Feitosa" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Leonardo Feitosa Nogueira - IFCE <i>Campus</i> Tauá - 2018</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
  </body>
</html>
