<?php
require_once('../conexao/banco.php');

$sql = "select * from tb_login";
$sql = mysqli_query($con, $sql) or die ("Erro na sql");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/consulta.css">
    <title>Consulta Login</title>
</head>

<script type="text/javascript">   

    function excluir_registro() {

        if(!confirm('Deseja realmente excluir este registro?')

    ){

        if(window.event)

            window.event.returnValue=false;

        else
            
            e.preventDefault();
            
     }

    }

</script>

<body>
    
<div id="principal">

    <div class="linha">

        <div class="coluna_01"> <strong>ID</strong> </div>
        <div class="coluna_03"> <strong>NOME</strong> </div>
        <div class="coluna_02"> <strong>LOGIN</strong> </div>
        <div class="coluna_02"> <strong>DATA</strong> </div>

    </div>

    <?php while ($dados = mysqli_fetch_array($sql)) { ?>

    <div class="linha">

        <div class="coluna_01"> <?php echo $dados['log_codigo']; ?> </div>
        <div class="coluna_03"> <?php echo $dados['log_nome']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['log_login']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['log_data_cadastro']; ?> </div>
    
        <div class="coluna_01">
            <a href="delete_login.php?log_codigo=<?php echo $dados['log_codigo']; ?>" onclick="excluir_registro(event)">
                <img src="../img/excluir.png">
            </a>
        </div>

        <div class="coluna_01">
            <a href="form_atualizar_login.php?log_codigo=<?php echo $dados['log_codigo']; ?>">
                <img src="../img/edit.png">
            </a>
        </div>
<?php } ?>

</div>

</body>
</html>