<?php	
	require_once(dirname(__FILE__).'/class/Login.php');
	
	$objConnection = new Connection();
	$objLogin = new Login();

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="iso-8859">
	<title>Formulário de Login com PHP OO</title>
	
	<link rel="stylesheet" href="css/style.css" />
	
</head>
<body>
	<div class="container-geral">
		<div class="container login">
			<h3>Formulário de Login</h3>
			<br />
			<form action="" method="POST">
				<label for="email">E-mail:</label>
				<br />
				<input type="text" name="email" id="email" required/>
				<br />
				<br />
				<label for="senha">Senha:</label>
				<br />
				<input type="password" name="senha" id="senha" required/>
				<br />
				<br />
				<input type="submit" value="Enviar" name="Enviar"/>
			</form>
		</div>
		<?php
		if(isset($_POST["Enviar"]) && $_POST["Enviar"] == "Enviar"){
			$logar = $objLogin->Logar($_POST["email"],$_POST['senha']);
		}
		?>
		<br />
		<?php 
		if (isset($logar)){
		?>
			<div class="container-erro">
				<?php echo $logar ?>
			</div>
		<?php } ?>
	</div>
</body>
</html>