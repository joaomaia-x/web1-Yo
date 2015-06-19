<?php 

  	require_once "../models/orcamento-model.php";  

  	$orcamentos = new Orcamento();
	$listagem = $orcamentos->listagem();
	
	//$edit = $orcamentos->responder();

?>