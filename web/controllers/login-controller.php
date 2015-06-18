<?php
	
	require_once "../models/login-model.php";
	
	if(valida_dados_login($_POST["login"],$_POST["senha"])){
		header("Location: ../views/homeADM-view.php");
	} else{
		//mensagem alerta de erro e
		header("Location: ../views/login-view.php") ;
		
	}
		
		
?>