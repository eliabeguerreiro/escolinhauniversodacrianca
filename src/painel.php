<?php
session_start();
$matricula[] = str_split($_SESSION['matricula']);
?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Painel de Salas</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="style-salas.css">
	</head>
	<body>
		<?php
			if(!empty($_SESSION['id'])){
				
			}else{
				ob_start();
				$_SESSION['msg'] = "Login expirou!";
				header("Location: ../index.php");
				ob_end_flush();
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
                <h3 id='sala-painel'>Salas:</h3>
                <h3 id='nome-painel'><?php echo $_SESSION['acesso'].' '.$_SESSION['nome']."<br>";?></h3> 
                <a href='sair.php' id='sair-painel'><img src="img/logout.png"></img></a>               
			</nav>
			<div class="rigth-content">
                
        </div>

        <div class="left-content">
            <div class="barra-painel">  
				<nav>
					<?php
						echo '<a href="1ano.php"><div class="link">1°Ano</div></a>';
						echo '<a href="2ano.php"><div class="link">2°Ano</div></a>';
						echo '<a href="3ano.php"><div class="link">3°Ano</div></a>';
						echo '<a href="4ano.php"><div class="link">4°Ano</div></a>';
						echo '<a href="5ano.php"><div class="link">5°Ano</div></a>';
						?>
				</nav>
			</div>
        </div>
