<?php
require_once("../conexao/banco.php");

$codigo = $_REQUEST['txt_codigo'];
$descricao = $_REQUEST['txt_descricao'];
$foto   = $_REQUEST['txt_foto'];
$status  = $_REQUEST['txt_status'];


$sql = "update tb_projetos set
                    pro_descricao = '$descricao',
                    pro_foto = '$foto',
                    pro_status = '$status'
                where
                    pro_codigo = '$codigo'";

mysqli_query($con, $sql) or die ("Erro na sql");
header("Location: consulta_projeto.php");
?>