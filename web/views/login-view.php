<?php include "header-view.php"; ?>

<div class="main-login">
	<div id="mainLogin">
 
		<form action="../controllers/login-controller.php" method="post">
			<table class="form">
				<tr>
					<td>Login</td> 
					<td><input name="login"></td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input type="password" name="senha"></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Enter"> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>

<?php include "footer-view.php"; ?>