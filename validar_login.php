<?php

include('conexao.php')

if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
      echo 'Preencha seu e-mail';
    } else if(strlen($_POST['senha']) == 0){
      echo 'Preencha sua senha';
    } else {

      $email = $mysqli->real_escape_string($_POST['email']);
      $senha = $mysqli->real_escape_string($_POST['senha']);

      $sql_code = 'select * from tb_';
    }
}

?>