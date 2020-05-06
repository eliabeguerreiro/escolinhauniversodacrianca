<?php
session_start();
include("conexao.php");
if(!empty($_SESSION['id'])){
	echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
	echo "<a href='sair.php'>Sair</a></br>";
};

echo '<a href="1ano.php">1°Ano</a></br>';
echo '<a href="2ano.php">2°Ano</a></br>';
echo '<a href="3ano.php">3°Ano</a></br>';
echo '<a href="4ano.php">4°Ano</a></br>';



