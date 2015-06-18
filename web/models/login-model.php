<?php

session_start();

function valida_dados_login($login,$senha){
	if($login == 'admin' && $senha=='admin')
	{
		$_SESSION["usuario_logado"]	= true; 
		$_SESSION["login"]	= $login;
		return true;
	}else{
		return false;
	}
}

function usuario_esta_logado()
{
	if($_SESSION["usuario_logado"])
		return true;
	else
		return false;
}

function retorna_nome_usuario_logado()
{
	return $_SESSION["login"];
}

function deslogar()
{
	unset($_SESSION["usuario_logado"]);
	unset($_SESSION["login"]);
}


?>