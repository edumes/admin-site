<?php
require_once('../conexao/banco.php');

$codigo = $_REQUEST['ski_codigo'];

$sql = "delete from tb_skill where ski_codigo = '$codigo'";

mysqli_query($con, $sql) or die ("Erro na sql");

header("Location: consulta_skill.php")

?>