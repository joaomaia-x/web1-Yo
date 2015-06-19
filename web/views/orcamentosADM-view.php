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
							<tbody>								
							<table class="form">
								<tr>
									<td>Nome Solicitante:</td>
									<td>
										<?= $orcamentoAtual['nomeSol'] ?>
									</td>
								</tr>
								<tr>
									<td> Email:</td>
									<td>
										<?= $orcamentoAtual['email'] ?>
									</td>
								</tr>
								<tr>
									<td> Telefone:</td>
									<td>
										<?= $orcamentoAtual['telefone'] ?>
									</td>
								</tr>
								<tr>
									<td> Empresa:</td>
									<td>
										<?= $orcamentoAtual['empresa'] ?>
									</td>
								</tr>
								<tr>
									<td> Serviço:</td>
									<td>					
										<?= $orcamentoAtual['servico'] ?>
									</td>
								</tr>
								<tr>
									<td> Detalhes Adicionais:</td>
									<td>
										<?= $orcamentoAtual['detalhes'] ?>
									</td>
								</tr>
								<tr>
									<td> Data Serviço:</td>
									<td>
										<?= $orcamentoAtual['dataServ'] ?>
									</td>
								</tr>
								<tr>
									<td> Endereço Coleta:</td>
									<td>
										<?= $orcamentoAtual['coleta'] ?>
									</td>
								</tr>
								<tr>
									<td> Endereço Entrega:</td>
									<td>
										<?= $orcamentoAtual['entrega'] ?>
									</td>
								</tr>
								</table>
								<form action="http://localhost/web1-Yo/web/controllers/orcamentosADM-controller.php" method="POST" id="respostaForm">
								<table>
									<tr>
									<td> Valor:</td>
									<td>
										<input type="text" id="valor" name="valor" value="<?= $orcamentoAtual['valor'] ?>" />
									</td>
									</tr>
									<tr>
									<td> comentarios:</td>
									<td>
										<input type="text" id="comADM" name="comADM" value="<?= $orcamentoAtual['comADM'] ?>"/>
									</td>
									<td>
										<input type="hidden" id="ID" name="ID" value="<?= $orcamentoAtual['ID'] ?>"/>
									</td>
									</tr>
								<tr>
									<td><input type="submit" id="responderOrcamento" value="Enviar"></td>
								</tr>									
							</table>
							</form>
					
		
		<?php } ?>
		
	</div>

<?php include "footer-view.php"; ?>

	