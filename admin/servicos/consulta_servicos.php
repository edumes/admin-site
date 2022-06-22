<?php
require_once('../conexao/banco.php');

$sql = "select * from tb_servicos";
$sql = mysqli_query($con, $sql) or die ("Erro na sql");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/consulta.css">
    <title>Consulta Serviços</title>
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

        <div class="coluna_03"> <strong>CODIGO</strong> </div>
        <div class="coluna_03"> <strong>TITULO</strong> </div>
        <div class="coluna_02"> <strong>DESCRIÇÃO</strong> </div>
        <div class="coluna_02"> <strong>ICONE</strong> </div>

    </div>

    <?php while ($dados = mysqli_fetch_array($sql)) { ?>

    <div class="linha">

        <div class="coluna_03"> <?php echo $dados['ser_codigo']; ?> </div>
        <div class="coluna_03"> <?php echo $dados['ser_titulo']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['ser_descricao']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['ser_data_cadastro']; ?> </div>
    
        <div class="coluna_01">
            <a href="delete_servicos.php?ser_codigo=<?php echo $dados['ser_codigo']; ?>" onclick="excluir_registro(event)">
                <img src="../img/excluir.png">
            </a>
        </div>

        <div class="coluna_01">
            <a href="form_atualizar_servicos.php?ser_codigo=<?php echo $dados['ser_codigo']; ?>">
                <img src="../img/edit.png">
            </a>
        </div>
<?php } ?>

</div>

</body>
</html>