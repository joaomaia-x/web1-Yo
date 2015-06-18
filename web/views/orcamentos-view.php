<?php include "header-view.php"; ?>

<div class="main-orcamento">
	<div id="mainOrcamento">
		<h4> Solicite seu Orçamento</h4>
		<p>Preencha os dados abaixo</p>
		
		<form action="../controllers/orcamentos-controller.php" method="POST">
			<table class="form">
				<tr>
					<td>Nome Solicitante:</td>
					<td>
						<input type="text" name="nomeSol" />	
					</td>
				</tr>
				<tr>
					<td> Email:</td>
					<td>
						<input type="email" name="email" />
					</td>
				</tr>
				<tr>
					<td> Telefone:</td>
					<td>
						<input type="number" name="telefone" />
					</td>
				</tr>
				<tr>
					<td> Empresa:</td>
					<td>
						<input type="text" name="empresa" />
					</td>
				</tr>
				<tr>
					<td> Serviço:</td>
					<td>					
					<select name="servico">
					  <option value="volvo">Transporte Carga</option>
					  <option value="saab">Locação</option>
					  <option value="opel">Outro</option>			  
					</select>
					</td>
				</tr>
				<tr>
					<td> Detalhes Adicionais:</td>
					<td>
						<textarea cols="40" rows="5" name="detalhes"></textarea>
					</td>
				</tr>
				<tr>
					<td> Data Serviço:</td>
					<td>
						<input type="date" name="dataServ" />
					</td>
				</tr>
				<tr>
					<td> Endereço Coleta:</td>
					<td>
						<input type="text" name="coleta" />
					</td>
				</tr>
				<tr>
					<td> Endereço Entrega:</td>
					<td>
						<input type="text" name="entrega" />
					</td>
				</tr>
				<tr>
					<td><input type="submit"/ value="Enviar"></td>
				</tr>
			</form>
	</div>		
</div>

<?php include "footer-view.php"; ?>