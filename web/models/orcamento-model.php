<?php

 class Orcamento{
	
	var $nomeSol;
	var $email;
	var $telefone;
	var $empresa;
	var $servico;
	var $detalhes;
	var $dataServ;
	var $coleta;
	var $entrega;
	
	function __construct(){
		
	}
	
	function save(){
		return true;
	}
}

?>