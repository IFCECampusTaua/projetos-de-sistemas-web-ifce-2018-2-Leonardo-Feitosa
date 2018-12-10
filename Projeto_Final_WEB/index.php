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
  <!-- Favicon -->
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
  
</head>

  <body>

    <!-- Navigation -->
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
              <a class="nav-link" href="editar_conta.php">Editar Conta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="apagar_conta.php" id="apagar">Excluir Conta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('imagens/img/home-bg.jpg')">
      <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-10 mx-auto">
              <div class="site-heading">
                <h1>Amostras de TCCs</h1>
                <span class="subheading">Encontre trabalhos prontos para inspira-se!</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Conteúdo pricipal -->
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-10 mx-auto">
          <div class="post-preview"> <!-- Primeiro post -->
            <a href="post.php">
              <h2 class="post-title">
                Sistema WEB para Divulgação de Eventos
              </h2>
              <h3 class="post-subtitle">
                UNIVERSIDADE TECNOLÓGICA FEDERAL DO PARANÁ
              </h3>
            </a>
            <p class="post-meta">Augusto Cesar Tonello Giacomini, Pato Branco-PR, 2017</p>
          </div> <!-- Fim de primeiro post -->
          <hr>
          <div class="post-preview">
            <a href="post1.php">
              <h2 class="post-title">
                Software ​Livre​ ​para ​Wireless ​Site Survey
              </h2>
              <h3 class="post-subtitle">
                INSTITUTO​ ​FEDERAL​ ​DE MINAS​ ​GERAIS​ ​-​ ​​<i>Campus</i>​ ​Formiga
              </h3>
            </a>
            <p class="post-meta">Vinícius​ ​de​ ​Laet​ ​Duarte​ ​Batista, Formiga-MG, 2017</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post2.php">
              <h2 class="post-title">
                Rede Neural Artificial para Reconhecimento de Tabela de Horários de Arme &frasl; Desarme no Sistema SIGMA
              </h2>
              <h3 class="post-subtitle">
                UNIVERSIDADE DO VALE DO ITAJAÍ
              </h3>
            </a>
            <p class="post-meta">Daniel Falqueto, São José-SC, 2007</p>
          </div>
          <hr>
		  
          <!-- Páginas -->
          <div class="clearfix">
			       <a class="btn btn-primary float-right" href="#">Próxima Página &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
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
    <!-- Custom scripts for this template -->
    <script type="text/javascript" src="js/clean-blog.min.js"></script>
    <script type="text/javascript" src="js/modal.js"></script>
  </body>
</html>