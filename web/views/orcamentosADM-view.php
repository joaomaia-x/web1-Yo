<?php session_start(); ?>
<?php include "../controllers/listagem-controller.php" ?>
<?php include "header-view.php"; ?>

<div class="main-homeADM">
		
		<?php
			if(!isset($_SESSION['usuario_logado'])){

				header('Location: ../views/login-view.php');

			}else{ ?>
				<H1>"Bem-Vindo, <?php echo $_SESSION['usuario_logado']; ?> <H1>"
				
				<div id="mainOrcamentosADM">
					<div id="sideBar">
						<p>Menu ADM</p>
					</div>
					<div id="inserirOrc">
						<table id="lista">
							<thead>
								<tr><th>ID</th></tr>
								<tr><th>Nome Solicitante</th></tr>
								<tr><th>Empresa</th></tr>
								<tr><th>Data Serviço</th></tr>
								<tr><th></th></tr>
							</thead>
							<tbody>
								<?php 
									$item = $_GET["id"];
									$listID = $orcamentos->itemRes($item);
									
									
										echo "<tr>";
										echo "<td>".$listID['ID']."</td></tr>";
										
									
																	
								?>
						</tbody>
						</table>
					</div>
				</div>
		
		<?php } ?>
		
	</div>

<?php include "footer-view.php"; ?>

	