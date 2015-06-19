<?php
  require_once "../models/orcamento-model.php";  

  $orcamento = new Orcamento();
  $orcamento->nomeSol = $_POST["nomeSol"];
  $orcamento->email = $_POST["email"];
  $orcamento->telefone = $_POST["telefone"];
  $orcamento->empresa = $_POST["empresa"];
  $orcamento->servico = $_POST["servico"];
  $orcamento->detalhes = $_POST["detalhes"];
  $orcamento->dataServ = $_POST["dataServ"];
  $orcamento->coleta = $_POST["coleta"];
  $orcamento->entrega = $_POST["entrega"];

  
  if($orcamento->save() == true){
  	//incluir alerta enviado
    header('Content-Type: application/json');
    echo json_encode(["resultado" => 'ok']);
    return null;
    
  } else{
    //incluir alerta erro e
    header('Content-Type: application/json');
    echo json_encode(["resultado" => 'erro']);
    return null;
  }

  
?>