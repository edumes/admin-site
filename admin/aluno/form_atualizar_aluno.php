<?php
require_once('../conexao/banco.php');
$codigo = $_REQUEST['alu_codigo'];

$sql = "select * from tb_aluno where alu_codigo = '$codigo'";
$sql = mysqli_query($con, $sql) or die ("Erro na sql");
$dados = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulários Atualizar</title>
<link rel="stylesheet" type="text/css" href="../css/formatacao.css">
</head>
<body>
    
<form name="frm_skill" action="atualizar_aluno.php" method="post">

<div id="principal">

<label>Codigo</label>
<input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['alu_codigo']; ?>" readonly>

<label>Nome</label>
<input name="txt_nome" type="text" class="input_01" value="<?php echo $dados['alu_nome']; ?>">

<label>Data de Nascimento</label>
<input name="txt_data_nascimento" type="date" class="input_01" value="<?php echo $dados['alu_data_nascimento']; ?>">

<label>Sexo</label>
<input name="txt_sexo" type="text" class="input_01" value="<?php echo $dados['alu_sexo']; ?>">

<label>CEP</label>
<input name="txt_cep" type="text" class="input_01" value="<?php echo $dados['alu_cep']; ?>">

<label>Logradouro</label>
<input name="txt_logradouro" type="text" class="input_01" value="<?php echo $dados['alu_logradouro']; ?>">

<label>Número</label>
<input name="txt_numero" type="text" class="input_01" value="<?php echo $dados['alu_numero']; ?>">

<label>Complemento</label>
<input name="txt_complemento" type="text" class="input_01" value="<?php echo $dados['alu_complemento']; ?>">

<label>Cidade</label>
<input name="txt_cidade" type="text" class="input_01" value="<?php echo $dados['alu_cidade']; ?>">

<label>Estado</label>
<input name="txt_estado" type="text" class="input_01" value="<?php echo $dados['alu_estado']; ?>">

<label>E-mail</label>
<input name="txt_email" type="text" class="input_01" value="<?php echo $dados['alu_email']; ?>">

<label>Telefone</label>
<input name="txt_telefone" type="text" class="input_01" value="<?php echo $dados['alu_telefone']; ?>">

<label>Celular</label>
<input name="txt_celular" type="text" class="input_01" value="<?php echo $dados['alu_celular']; ?>">

<label>Escolaridade</label>
<input name="txt_escolaridade" type="text" class="input_01" value="<?php echo $dados['alu_escolaridade']; ?>">

<label>Serie</label>
<input name="txt_serie" type="text" class="input_01" value="<?php echo $dados['alu_serie']; ?>">

<label>Ano de Conclusão</label>
<input name="txt_ano_conclusao" type="date" class="input_01" value="<?php echo $dados['alu_ano_conclusao']; ?>">

<label>Escola</label>
<input name="txt_escola" type="text" class="input_01" value="<?php echo $dados['alu_escola']; ?>">

<label>Objetivo</label>
<input name="txt_objetivo" type="text" class="input_01" value="<?php echo $dados['alu_objetivo']; ?>">

<input name="btn_enviar" type="submit" class="btn">

</div>

</form>
</body>
</html>
