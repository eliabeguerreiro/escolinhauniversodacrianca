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
echo'<p>Você está na pagina do terceiro ano</p>';
echo '<a href="painel.php">voltar</a></br>';


$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
	$numPaginas = video($sala = '3ano', $pagina);
for($i = 1; $i < $numPaginas + 1; $i++) { 
    echo "<a href='3ano.php?pagina=$i'>".$i."</a> "; 
}     


