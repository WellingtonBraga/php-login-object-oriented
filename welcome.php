<?php
	require_once(dirname(__FILE__).'/class/Login.php');
	$objLogin = new Login();
	
	$objLogin->verificarLogado();
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="iso-8859">
	<title>Bem Vindo</title>
	
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div class="container welcome">
		<h3>Bem Vindo <?php echo $idUsuario = $objLogin->getIdUsuario(); ?></h3>
	</div>
    <br>
    <a href="logout.php">Sair</a>
</body>
</html>