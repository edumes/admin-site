<?php
require_once('../conexao/banco.php');

$sql = "select * from tb_aluno";
$sql = mysqli_query($con, $sql) or die ("Erro na sql");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/consulta.css">
    <title>Consulta Aluno</title>
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

        <div class="coluna_01"> <strong>CODIGO</strong> </div>
        <div class="coluna_03"> <strong>NOME</strong> </div>
        <div class="coluna_01"> <strong>SEXO</strong> </div>
        <div class="coluna_01"> <strong>NUMERO</strong> </div>
        <div class="coluna_02"> <strong>CIDADE</strong> </div>
        <div class="coluna_02"> <strong>CELULAR</strong> </div>
        <div class="coluna_03"> <strong>ESCOLA</strong> </div>
        

    </div>

    <?php while ($dados = mysqli_fetch_array($sql)) { ?>

    <div class="linha">

        <div class="coluna_01"> <?php echo $dados['alu_codigo']; ?> </div>
        <div class="coluna_03"> <?php echo $dados['alu_nome']; ?> </div>
        <div class="coluna_01"> <?php echo $dados['alu_sexo']; ?> </div>
        <div class="coluna_01"> <?php echo $dados['alu_numero']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['alu_cidade']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['alu_celular']; ?> </div>
        <div class="coluna_03"> <?php echo $dados['alu_escola']; ?> </div>
        
    
        <div class="coluna_01">
            <a href="delete_aluno.php?alu_codigo=<?php echo $dados['alu_codigo']; ?>" onclick="excluir_registro(event)">
                <img src="../img/excluir.png">
            </a>
        </div>

        <div class="coluna_01">
            <a href="form_atualizar_aluno.php?alu_codigo=<?php echo $dados['alu_codigo']; ?>">
                <img src="../img/edit.png">
            </a>
        </div>
<?php } ?>

</div>

</body>
</html>