<?php
require_once('../conexao/banco.php');
$codigo = $_REQUEST['pro_codigo'];

$sql = "select * from tb_projetos where pro_codigo = '$codigo'";
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
    
<form name="frm_skill" action="atualizar_projeto.php" method="post">

<div id="principal">

<label>Codigo</label>
<input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['pro_codigo']; ?>">

<label>Descrição</label>
<input name="txt_descricao" type="text" class="input_01" value="<?php echo $dados['pro_descricao']; ?>">

<label>Foto</label>
<input name="txt_foto" type="text" class="input_01" value="<?php echo $dados['pro_foto']; ?>">

<label>Status</label>
<input name="txt_status" type="text" class="input_01" value="<?php echo $dados['pro_status']; ?>">

<input name="btn_enviar" type="submit" class="btn">

</div>

</form>
</body>
</html>
