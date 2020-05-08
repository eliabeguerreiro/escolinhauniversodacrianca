<?php
session_start();
if(!empty($_SESSION['id'])){
	echo $_SESSION['acesso'].' '.$_SESSION['nome']."<br>";
	echo "<a href='sair.php'>Sair</a></br>";
}else{
	$_SESSION['msg'] = "Login expirou!";
	header("Location: ../index.php");
};
if($_SESSION['acesso'] == 'admin'){
}elseif($matricula[0]!=0 || $matricula[1]!=1){
    $_SESSION['msg']='Você não pertence a esta série!</br>';
    header("Location: painel.php");
};
echo'<p>Você está na pagina do terceiro ano</p>';
echo '<a href="painel.php">voltar</a></br>';