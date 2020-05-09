<?php
session_start();
$matricula[] = str_split($_SESSION['matricula']);
?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="style-salas.css">
	</head>
	<body>
		<?php
			if(!empty($_SESSION['id'])){
				
			}else{
				$_SESSION['msg'] = "Login expirou!";
				header("Location: ../index.php");
			}
			if(isset($_SESSION['msg'])){
				echo "<div class='alert alert-danger' role='alert'>";
				echo$_SESSION['msg'];
				echo"</div>";
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo "<div class='alert alert-danger' role='alert'>";
				echo$_SESSION['msgcad'];
				echo"</div>";
				unset($_SESSION['msg']);
			}?>
		<div class="upper-content">
            <nav>
                <h3 id='sala'>Sala do 3°ano</h3>
                <h3 id='nome'><?php echo $_SESSION['acesso'].' '.$_SESSION['nome']."<br>";?></h3> 
                <a href='sair.php' id='sair'><img src="img/logout.png"></img></a>               
			</nav>
        </div>




























echo '<a href="1ano.php">1°Ano</a></br>';
echo '<a href="2ano.php">2°Ano</a></br>';
echo '<a href="3ano.php">3°Ano</a></br>';
echo '<a href="4ano.php">4°Ano</a></br>';
echo '<a href="5ano.php">5°Ano</a></br>';