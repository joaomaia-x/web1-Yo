<?php

require_once ('connect-model.php');

 class Orcamento extends Connect{
	
	var $nomeSol;
	var $email;
	var $telefone;
	var $empresa;
	var $servico;
	var $detalhes;
	var $dataServ;
	var $coleta;
	var $entrega;
	var $id;
	
	var $valor;
	var $comADM;
	var $itemID;
	
	
	function __construct(){
		
	}
	
	function save(){
		$query = "INSERT INTO orcamentos (nomeSol, email, telefone, empresa, servico, detalhes, dataServ, coleta, entrega)
					VALUES ('".$this->nomeSol."', '".$this->email."','".$this->telefone."','".$this->empresa."','".$this->servico."','".$this->detalhes."','".$this->dataServ."','".$this->coleta."','".$this->entrega."')";
		$conexao = new Connect;
		$conexao->query($query);
		return true;
	}

	function listagem(){
		$query = "SELECT ID,nomeSol, email, telefone, empresa, servico, detalhes, dataServ, coleta, entrega FROM orcamentos";
		$conexao = new Connect;
		$resultado = $conexao->query($query);
		return $resultado; 
	}
	
	function excluir(){
		
		$query = "DELETE FROM usuarios where ID='".$this->id."'";
		$conexao = new Connect;
		$conexao->query($query);
		return true;
	}
	
	public function itemRes($itemID){
		$query = "SELECT FROM orcamentos WHERE ID=".$itemID."";
		$conexao = new Connect;
		$resultado = $conexao->query($query);
		return $resultado; 
	}
	
	function responder($itemID){
		$query = "INSERT INTO orcamentos (valor, comADM)
					VALUES ('".$this->valor."', '".$this->comADM."')
					WHERE ID=".$itemID."";
		$conexao = new Connect;
		$conexao->query($query);
		return true;
		
	}
}

?>