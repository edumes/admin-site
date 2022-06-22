<?php
require_once('../conexao/banco.php');
$codigo = $_REQUEST['ser_codigo'];

$sql = "select * from tb_servicos where ser_codigo = '$codigo'";
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
    
<form name="frm_servicos" action="atualizar_servicos.php" method="post">

<div id="principal">

<label>Codigo</label>
<input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['ser_codigo']; ?>" readonly>

<label>Título</label>
<input name="txt_titulo" type="text" class="input_01" value="<?php echo $dados['ser_titulo']; ?>">

<label>Descricao</label>
<input name="txt_descricao" type="text" class="input_01" value="<?php echo $dados['ser_descricao']; ?>">

<label>Icone</label>
<input name="txt_icone" type="text" class="input_01" value="<?php echo $dados['ser_icone']; ?>">

<input name="btn_enviar" type="submit" class="btn">

</div>

</form>
</body>
</html>
