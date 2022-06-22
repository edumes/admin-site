<?php
require_once("../conexao/banco.php");

$codigo = $_REQUEST['txt_codigo'];
$descricao   = $_REQUEST['txt_descricao'];
$porcentagem  = $_REQUEST['txt_porcentagem'];


$sql = "update tb_skill set
                    ski_porcentagem = '$porcentagem',
                    ski_descricao = '$descricao'
                where
                    ski_codigo = '$codigo'";

mysqli_query($con, $sql) or die ("Erro na sql");
header("Location: consulta_skill.php");
?>