<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> .:: Login ::. </title>

<link rel="stylesheet" type="text/css" href="css/formatacao.css">
<style type="text/css">

body {
        background-image: url('img/fundo.jpg');
        background-attachment: fixed;
        background-size: 100%;
      }

label {
	text-align: center;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
	color: #FFF;
	margin: 5px;
	width: 300px;
	height: 16px;
	float: left;
}

.btn {
	text-align: center;
	width:  100px;
	height: 30px;
	background-color: #00ff37;
	border: 0px;
	float: left;
  	font-size: 20px;
	margin: 5px;
	color: #FFF;
}

.btn:hover {
	width:  100px;
	height: 24px;
  font-size: 20px;
	background-color: #08691d;
	border: 0px;
	float: left;
	margin: 5px;
	color: #FFF;
}

</style>

</head>

<body>

<form name="frm_login" action="validacao.php" method="post">
  <div id="principal">
    <label> Login </label>
    <input name="txt_usuario" type="text" class="input_01">
	<br><br>
    <label> Senha </label>
    <input name="txt_senha" type="password" class="input_01">
	<br><br>
    <input name="btn_enviar" type="submit" value="Logar" class="btn">
  </div>
</form>

</body>
</html>

