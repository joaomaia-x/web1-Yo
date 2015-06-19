<?php 
	require_once ('connect-model.php');

	class Usuario extends Connect{
		
		var $ID;
		var $login;
		var $senha;
		
		public function login(){
			$query = "SELECT ID, login FROM usuarios WHERE login = '".$this->login."' AND senha = '".$this->senha."'";
			$conexao = new Connect;
			$resultados = $conexao->query($query);
			if($resultados->rowCount() > 0){
				foreach ($resultados as $resultado) {
					return $resultado['login'];
				}
			}else{
				return false;
			}
		}
		
	}
	
?>