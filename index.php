<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="css.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	<body>
	    <center>
		<h2>Entrar</h2>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>
		<p>
		<form method="POST" action="valida.php">
			<label>Usuário</label>
			<input type="matricula" name="matricula" placeholder="Digite sua matriculo">
			
			<label>Senha</label>
			<input type="password" name="senha" placeholder="Digite a sua senha">
			<br>
			<input type="submit" name="btnLogin" value="Acessar">
			
			<h4>Mudar senha?</h4>
			<a href="src/mudarsenha.php">aqui</a>
		
		</form>
		<br></center>
	</body>

</html>