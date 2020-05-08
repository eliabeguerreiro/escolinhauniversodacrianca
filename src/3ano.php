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

$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
		$numPaginas = video($sala = '3ano', $pagina);
echo '</br></br></br>';	

?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>3° Ano</title> 
		<link rel="stylesheet" href="style-salas.css">
	</head>
		<body>
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


		</body>


	echo'<p>Você está na pagina do terceiro ano</p>';
	echo'<a href="painel.php">voltar</a></br>';


	
</html>
<?php
     


     
