<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" type="text/css "href="../css/formatacao.css">
</head>
<body>
    
    <form name="frm_login" action="cadastro_login.php" method="post">
        <div id="principal">
            <label>Nome</label>
            <input name="txt_nome" type="text" class="input_01">

            <label>Login</label>
            <input name="txt_login" type="text" class="input_01">

            <label>Senha</label>
            <input name="txt_senha" type="password" class="input_01">

            <input name="btn_enviar" type="submit" value="Enviar" class="btn">
        </div>
    </form>
    
</body>
</html>