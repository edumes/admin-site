<?php
require_once('../conexao/banco.php');
$codigo = $_REQUEST['ski_codigo'];

$sql = "select * from tb_skill where ski_codigo = '$codigo'";
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
    
<form name="frm_skill" action="atualizar_skill.php" method="post">

<div id="principal">

<label>Codigo</label>
<input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['ski_codigo']; ?>" readonly>

<label>Porcentagem</label>
<input name="txt_porcentagem" type="text" class="input_01" value="<?php echo $dados['ski_porcentagem']; ?>">

<label>Descricao</label>
<input name="txt_descricao" type="text" class="input_01" value="<?php echo $dados['ski_descricao']; ?>">

<input name="btn_enviar" type="submit" class="btn">

</div>

</form>
</body>
</html>
