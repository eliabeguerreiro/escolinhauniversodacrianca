<?php
session_start();
include_once("conexao.php");
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
$btnMudar = filter_input(INPUT_POST, 'btnMudarsenha', FILTER_SANITIZE_STRING);
if($btnMudar){
    $matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
	$senha_nova = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $confirme_senha = filter_input(INPUT_POST, 'confirma_senha', FILTER_SANITIZE_STRING);
    echo "$email - $senha - $confirmasenha";
    if((!empty($matricula)) AND (!empty($senha_nova)) AND (!empty($confirme_senha))){
        $result_usuario = "SELECT matricula, senha FROM usuarios WHERE matricula='$matricula' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        if($resultado_usuario){
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);
            $senha_atual = $row_usuario['senha'];
            if (($senha_nova = $senha_atual) || ($senha_nova != $confirme_senha)){
                $_SESSION['msg'] = "Tente outra senha!";
                header("Location: mudarsenha.php");
            }else{
                $senha_nova = password_hash($confirme_senha, PASSWORD_DEFAULT);
                $resultado="UPDATE usuarios SET senha = '$senha_nova' WHERE matricula ='".$row_usuario['matricula']."'";
                $mudando = mysqli_query($conn, $resultado); 
                if($mudando){
                    $_SESSION['msg'] = "Deu certo pae!";
                    header("Location: index.php");}
                } 
               
            }        
                
        }
    }

?>      
<html>     
    </head>
	    <body><center>
		    <h2>Mudar Senha</h2>
		    <?php
		    	if(isset($_SESSION['msg'])){
		    		echo $_SESSION['msg'];
		    		unset($_SESSION['msg']);
		    	}
		    ?><p>
		    <form method="POST" action="">
			    <label>Matricula</label>
			    <input type="matricula" name="matricula" placeholder="Digite a sua matricula">
			
	    		<label>Senha</label>
	    		<input type="password" name="senha" placeholder="Digite uma nova senha"/>
                
                <label>Confirmar senha</label>
		    	<input type="password" name="confirma_senha" placeholder="Confirme sua senha"/>
        
                <br>	
                <input type="submit" name="btnMudarsenha" value="Cadastrar"><br>
                
                <h4>Voltar?</h4>
			    <a href="index.php">aqui</a>
								
	    	</form></center>
	    </body>
	
</html>