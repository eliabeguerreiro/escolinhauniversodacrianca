<?php
session_start();
$sala  = '3ano';
include("funcoes.php");
if(!empty($_SESSION['id'])){
    if($_SESSION['acesso'] == 'Administrador'){}}
    elseif($matricula[0]!=0 || $matricula[1]!=1){
        $_SESSION['msg']='Você não pertence a esta série!</br>';
        header("Location: painel.php");
    };
?>
<html>
    <head>
        <meta charset="utf-8"/>
		<title>X° Ano</title> 
		<link rel="stylesheet" href="style-salas.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div class="upper-content">
            <nav>
                <h3 id='sala'>Sala do 3° ano</h3>
                <h3 id='nome'><?php echo $_SESSION['nome']."<br>";?></h3> 
                <a href="painel.php" id='voltar'><img src="img/voltar.png"></img></a>               
            </nav>
        </div>
        <div class="right-content">
            <?php 
			$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
			$numPaginas = video($sala, $pagina);?>
        </div>
        <div class="left-content">
            <div class="barra">  
				<nav>
					<?php
						for($i = 1; $i < $numPaginas + 1; $i++) {
							echo "<a href='".$sala.".php?pagina=$i'>";
							echo '<div class = "link">';
							echo$i;
							echo"</div></a>"; 
						};?>S
				</nav>
			</div>

        </div>
        
    </body>
</html>