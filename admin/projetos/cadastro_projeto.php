<?php
require_once('../conexao/banco.php');

$descricao = $_REQUEST['txt_descricao'];
$foto = $_REQUEST['txt_foto'];
$status = $_REQUEST['txt_status'];

$sql = "insert into tb_projetos (pro_descricao, pro_foto, pro_status)
                                values ('$descricao', '$foto', '$status')";

mysqli_query($con, $sql) or die ("Erro na sql");

header("Location: consulta_projeto.php");

?>