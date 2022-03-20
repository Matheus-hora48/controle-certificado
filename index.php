<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

  if (strlen($_POST['email']) == 0) {
    header('Location: /?login=erro');
  } else if (strlen($_POST['senha']) == 0) {
    header('Location: /?login=erro3');
  } else {

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM tb_usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {

      $usuario = $sql_query->fetch_assoc();

      if (!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];

      header("Location: painel.php");
    }
  }
}
?>

<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="/assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Controle certificados
    </a>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-login">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>

              <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                <div class="text-danger">
                  Usuário inválido
                </div>

              <?php } ?>

              <?php if (isset($_GET['login']) && $_GET['login'] == 'erro3') { ?>

                <div class="text-danger">
                  Senha inválida
                </div>

              <?php } ?>

              <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                <div class="text-danger">
                  Por favor, faça login antes de acessar as páginas protegidas
                </div>

              <?php } ?>

              <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>