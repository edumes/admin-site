<?php
require_once('../conexao/banco.php');

$sql = "select * from tb_projetos";
$sql = mysqli_query($con, $sql) or die ("Erro na sql");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/consulta.css">
    <title>Consulta Projeto</title>
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
        <div class="coluna_03"> <strong>DESCRIÇÃO</strong> </div>
        <div class="coluna_03"> <strong>FOTO</strong> </div>
        <div class="coluna_02"> <strong>STATUS</strong> </div>
        <div class="coluna_02"> <strong>DATA DO CADASTRO</strong> </div>

    </div>

    <?php while ($dados = mysqli_fetch_array($sql)) { ?>

    <div class="linha">

        <div class="coluna_03"> <?php echo $dados['pro_codigo']; ?> </div>
        <div class="coluna_03"> <?php echo $dados['pro_descricao']; ?> </div>
        <div class="coluna_03"> <?php echo $dados['pro_foto']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['pro_status']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['pro_data_cadastro']; ?> </div>
    
        <div class="coluna_01">
            <a href="delete_projeto.php?pro_codigo=<?php echo $dados['pro_codigo']; ?>" onclick="excluir_registro(event)">
                <img src="../img/excluir.png">
            </a>
        </div>

        <div class="coluna_01">
            <a href="form_atualizar_projeto.php?pro_codigo=<?php echo $dados['pro_codigo']; ?>">
                <img src="../img/edit.png">
            </a>
        </div>
<?php } ?>

</div>

</body>
</html>