<?php
session_start();
include_once("conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
	$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$email - $senha";
	if((!empty($matricula)) AND (!empty($senha))){
        //Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT id, nome, matricula, senha, nivel FROM usuarios WHERE matricula='$matricula' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['matricula'] = $row_usuario['matricula'];
				$_SESSION['acesso'] = $row_usuario['nivel'];
				header("Location: painel.php");
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: ../index.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto!";
		header("Location: ../index.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: ../index.php");
}
