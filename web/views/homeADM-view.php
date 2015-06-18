<?php include "header-view.php"; ?>

	<div class="main-homeADM">
		
		<?php require_once "../models/login-model.php";
			if(!usuario_esta_logado()){?>
			<p>Usuário sem Permissão.</p>
		<?php } else {?>
		
			<div id="mainHomeADM">
				<div id="sideBar">
					<h1>Menu ADM</h1>
				</div>
				<div id="filtros">
					
				</div>
				<div id="listaOrcamentos">
				</div>
			</div>
		
		<?php } ?>
		
	</div>

<?php include "footer-view.php"; ?>

	