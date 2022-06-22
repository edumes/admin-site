<?php
require_once("../conexao/banco.php");

$codigo = $_REQUEST['txt_codigo'];
$nome   = $_REQUEST['txt_nome'];
$data_nascimento  = $_REQUEST['txt_data_nascimento'];
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

$sql = "update tb_aluno set
                    alu_nome = '$nome',
                    alu_data_nascimento = '$data_nascimento',
                    alu_sexo = '$sexo',
                    alu_cep = '$cep',
                    alu_logradouro = '$logradouro',
                    alu_numero = '$numero',
                    alu_complemento = '$complemento',
                    alu_cidade = '$cidade',
                    alu_estado = '$estado',
                    alu_email = '$email',
                    alu_telefone = '$telefone',
                    alu_celular = '$celular',
                    alu_escolaridade = '$escolaridade',
                    alu_serie = '$serie',
                    alu_ano_conclusao = '$ano_conclusao',
                    alu_escola = '$escola',
                    alu_objetivo = '$objetivo'
                where
                    alu_codigo = '$codigo'";

mysqli_query($con, $sql) or die ("Erro na sql");
header("Location: consulta_aluno.php");
?>