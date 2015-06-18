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
   
  
  if($obj_orcamento->save()){
  	//incluir alerta enviado
  } else{
    //incluir alerta erro e
    header("Location: ../views/orcamentos-view");
  }


?>