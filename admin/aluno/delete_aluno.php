<?php
require_once('../conexao/banco.php');

$codigo = $_REQUEST['alu_codigo'];

$sql = "delete from tb_aluno where alu_codigo = '$codigo'";

mysqli_query($con, $sql) or die ("Erro na sql");

header("Location: consulta_aluno.php")

?>