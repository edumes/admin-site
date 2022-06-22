<?php
require_once('../conexao/banco.php');

$codigo = $_REQUEST['pro_codigo'];

$sql = "delete from tb_projetos where pro_codigo = '$codigo'";

mysqli_query($con, $sql) or die ("Erro na sql");

header("Location: consulta_projeto.php")

?>