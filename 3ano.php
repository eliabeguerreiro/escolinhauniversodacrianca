<?php
session_start();
$matricula[] = str_split($_SESSION['matricula']);
if($_SESSION['matricula'] == 0000){
}
elseif($matricula[0]!=0 || $matricula[1]!=3){
    $_SESSION['msg']='Você não pertence a esta série!</br>';
    header("Location: painel.php");
};

echo'<p>Você está na pagina do terceiro ano</p>';
echo '<a href="painel.php">voltar</a></br>';