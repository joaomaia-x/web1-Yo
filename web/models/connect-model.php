<?php 

	class Connect {

		var $conexao;

		public function query($sql){
			$conexao = new PDO('mysql:host=localhost;port=3306;dbname=web1-Yo;','root','', array(PDO::ATTR_PERSISTENT=>true));
			$result = $conexao->query($sql);
			return $result;
		}

	}

 ?>