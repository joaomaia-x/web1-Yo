<?php 

  	require_once "../models/orcamento-model.php";  

  	$orcamentos = new Orcamento();
	$listagem = $orcamentos->listagem();
	
	//$edit = $orcamentos->responder();
	if(isset($_GET['id'])){
		$orcamento = new Orcamento;
		foreach ($orcamento->itemRes($_GET['id']) as $item) {
			$orcamentoAtual = $item;
		}
	}

?>