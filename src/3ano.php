<?php
session_start();
include("funcoes.php");
if(!empty($_SESSION['id'])){
	echo $_SESSION['acesso'].' '.$_SESSION['nome']."<br>";
	echo "<a href='sair.php'>Sair</a></br>";
}else{
	$_SESSION['msg'] = "Login expirou!";
	header("Location: ../index.php");
};
if($_SESSION['acesso'] == 'Admin'){
}elseif($matricula[0]!=0 || $matricula[1]!=1){
    $_SESSION['msg']='Você não pertence a esta série!</br>';
    header("Location: painel.php");
};
?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>3° Ano</title> 
		<link rel="stylesheet" href="style-salas.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
		<body>
			<?php 
			$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
			$numPaginas = video($sala = '3ano', $pagina);
			echo '</br></br></br>';?>

			<div class="barra">  
				<nav>
					<?php
						for($i = 1; $i < $numPaginas + 1; $i++) {
							echo "<a href='3ano.php?pagina=$i'>";
							echo '<div class = "link">';
							echo$i;
							echo"</div></a>"; 
						};?>




				</nav>
			</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>				
		</body>


	echo'<p>Você está na pagina do terceiro ano</p>';
	echo'<a href="painel.php">voltar</a></br>';


	
</html>
<?php
     


     
