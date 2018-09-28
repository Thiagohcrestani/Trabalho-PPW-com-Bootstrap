<?php
	session_start();
	$senha = $_SESSION['calory_senha'];

	$senhadigitada =  md5($_POST['senha']);

	if ($senha == $senhadigitada) {
		echo 'sucesso';
			
	}else{

		echo 'erro';
			
		}



?>