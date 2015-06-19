<?php
  require_once "../models/orcamento-model.php";  
  
  $orc = new Orcamento;
  $orc->itemID = $_POST['ID'];
  $orc->valor = $_POST["valor"];
  $orc->comADM = $_POST["comADM"];
   
  if(isset($orc->itemID)){
        				
    if($orc->responder($orc->itemID) == true){
      header('Content-Type: application/json');
      echo json_encode(["resultado" => 'ok']);
      return null;
    
  } else{
    //incluir alerta erro e
      header('Content-Type: application/json');
      echo json_encode(["resultado" => 'erro']);
      return null;
    }
	}
  ?>