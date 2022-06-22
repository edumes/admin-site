<?php
require_once('../conexao/banco.php');

$porcentagem = $_REQUEST['txt_porcentagem'];
$descricao = $_REQUEST['txt_descricao'];

$sql = "insert into tb_skill (ski_porcentagem, ski_descricao)
                                values ('$porcentagem', '$descricao')";

mysqli_query($con, $sql) or die ("Erro na sql");

header("Location: consulta_skill.php");

?>