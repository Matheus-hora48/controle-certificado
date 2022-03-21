<?php
include_once('outra_conexao.php');

//Colocando dados
$sql = "select * from tb_certificados ORDER by id asc
";

$result = $conexao->query($sql);


?>