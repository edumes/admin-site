<?php
require_once('../conexao/banco.php');

$nome = $_REQUEST['txt_nome'];
$data_nasc  = $_REQUEST['txt_data_nasc'];
$sexo = $_REQUEST['txt_sexo'];
$cep = $_REQUEST['txt_cep'];
$logradouro = $_REQUEST['txt_logradouro'];
$numero = $_REQUEST['txt_numero'];
$complemento = $_REQUEST['txt_complemento'];
$cidade = $_REQUEST['txt_cidade'];
$estado = $_REQUEST['txt_estado'];
$email = $_REQUEST['txt_email'];
$telefone = $_REQUEST['txt_telefone'];
$celular = $_REQUEST['txt_celular'];
$escolaridade = $_REQUEST['txt_escolaridade'];
$serie = $_REQUEST['txt_serie'];
$ano_conclusao = $_REQUEST['txt_ano_conclusao'];
$escola = $_REQUEST['txt_escola'];
$objetivo = $_REQUEST['txt_objetivo'];

$sql = "insert into tb_aluno (alu_nome, alu_data_nascimento, alu_sexo, alu_cep, alu_logradouro, alu_numero, alu_complemento, alu_cidade, alu_estado, alu_email, alu_telefone, alu_celular, alu_escolaridade, alu_serie, alu_ano_conclusao, alu_escola, alu_objetivo)
                                values ('$nome', '$data_nasc', '$sexo', '$cep', '$logradouro', '$numero', '$complemento', '$cidade', '$estado', '$email', '$telefone', '$celular', '$escolaridade', '$serie', '$ano_conclusao', '$escola', '$objetivo')";

mysqli_query($con, $sql) or die ("Erro na sql");

header("Location: consulta_aluno.php");

?>