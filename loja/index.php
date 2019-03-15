<?php 
	include("cabecalho.php"); 

	if(isset($_GET["login"]) && $_GET["login"]==true) {
		echo '<p class="alert-success">OK!';
	}
	if (isset($_GET["login"]) && $_GET["login"]==false) {
		echo '<p class="alert-danger">Usuário/senha inválidos!';
        $msg = mysqli_error($conexao);
	}
?>
	<h1>Bem-vindo de volta!</h1>
	<br>
	<h2></h2>

	<form action="login.php" >
	<br>
		<tr>
			<td><input id="login" class="form-control" type=text placeholder="Login"></td>
		</tr>
		<br>
		<tr>
			<td><input id="senha" class="form-control" type="password" placeholder="Senha"></td>
		</tr>
		<tr>
			<td><input type="checkbox" onclick="myFunction()">Mostrar senha</td>
		</tr>
		<br>
		<tr>
			<td><input type="submit" class="btn btn-primary" value="Entrar"></td>
	</form>
<?php include("rodape.php"); ?>

