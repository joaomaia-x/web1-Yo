<?php session_start(); ?>
<?php include "../controllers/listagem-controller.php" ?>
<?php include "header-view.php"; ?>

	<div class="main-homeADM">
		
		<?php
			if(!isset($_SESSION['usuario_logado'])){

				header('Location: ../views/login-view.php');

			}else{ ?>
				<h2>"Bem-Vindo, <?php echo $_SESSION['usuario_logado']; ?>" </h2>
				
				<div id="mainHomeADM">
					<div id="sideBar">
						<h1>Menu ADM</h1>
					</div>
					<div id="listaOrcamentos">
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
								foreach ($listagem as $item) {
									echo "<tr>";
									echo "<td>".$item['ID']."</td>";
									echo "<td>".$item['nomeSol']."</td>";
									echo "<td>".$item['empresa']."</td>";
									echo "<td>".$item['dataServ']."</td>";
									
									echo "<td><a href='orcamentosADM-view.php?id=".$item['ID']."'>Responder</a></td>";
									
									echo "</tr>";
								}
								?>
						</tbody>
						</table>
					</div>
				</div>
		
		<?php } ?>
		
	</div>

<?php include "footer-view.php"; ?>

	