<?php 
	include("usuario.php");
	include("cabecalho.php");


	if (isset($_GET["login"]) && $_GET["login"]==true) {
		echo '<p class="alert-success">OK!</p>';
	}

	if (isset($_GET["login"]) && $_GET["login"]==false) {
		echo '<p class="alert-danger">Usuário/senha inválidos!</p>';
        $msg = mysqli_error($conexao);
	}

	echo '<h1>Bem-vindo de volta!</h1>';

	if (isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"]==true) {
		echo '<p class="alert-danger">Permissão negada!';
	}
	
	if (isset($_GET["logout"]) && $_GET["logout"]==true) {
		echo '<p class="alert-primary">Até mais...';
	}

	if (usuarioEstaLogado()) {
			echo '<p class="text-success">Você está logado como <?= usuarioLogado() ?>.<a href="logout.php">Deslogar</a></p>';
	} else {

?>
	<form action="login.php" method="post">
	<br>
		<tr>
			<td><input id="login" name="email" class="form-control" type=text placeholder="E-mail"></td>
		</tr>
		<br>
		<tr>
			<td><input id="senha" name="senha" class="form-control" type="password" placeholder="Senha"></td>
		</tr>
		<tr>
			<td><input type="checkbox" onclick="myFunction()">Mostrar senha</td>
		</tr>
		<br><br>
		<tr>
			<td><input type="submit" class="btn btn-primary" value="Entrar"></td>
	</form>
	
<?php 
	}

	include("rodape.php"); 
?>

