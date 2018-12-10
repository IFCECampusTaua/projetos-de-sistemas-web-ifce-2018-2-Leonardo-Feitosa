<?php
  // Inica uma nova sessão
  session_start();

  // Verifica se o usário preencheu os campos do formulário
  // Evita que acesse diretamente a página "login.php"
  if (empty($_POST["nome_user"]) || empty($_POST["senha"])) {
    header("Location: login-signup.html");
    exit();
  }
  // Recebendo os dados do formulário de "login"
  $user = $_POST["nome_user"]; 
  $senha = $_POST["senha"];
  $entrar = $_POST["entrar"];

  // Abrindo uma conexão com o BD
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "usuarios";

  // Criar conexão
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Checar conexão
  if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
  }

  // Confere se os dados fornecidos são iguais aos que estão no BD.
  $sql = "SELECT * FROM users WHERE nome_user = '{$user}' AND senha1 = '{$senha}'";
  $result = mysqli_query($conn, $sql);

  if (isset($entrar)) {
    if (mysqli_num_rows($result) == 1) {
      $_SESSION["usuario"] = $user; 
      //echo "Funcionou! Vc está logado!";
      header("Location: index.php");
      exit();
    }else {
      echo "alert('Usuario e/ou senha invalidos!');";
      header("Location: login-signup.html");
      exit();
    }
  }
  // Fecha a conexão com BD
  mysqli_close($conn);
?>