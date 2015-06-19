<?php
	session_start();
	
	include "../models/usuario-model.php";
	include "main-controller.php";
	
	$usuario = new Usuario;
		
	$usuario->login = $_POST['login']; 
	$usuario->senha = $_POST['senha']; 
	
	$validacao = $usuario->login();
	if($validacao != false){
		$_SESSION['usuario_logado'] = $validacao;
		header('Location: ../views/homeADM-view.php');
	}else{
		header('Location: ../views/login-view.php');
	}
		
?>