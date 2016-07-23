<?php
	require ()
 ?>
<!DOCTYPE html>
<html>
<head>
	<?php
	include('includes/header-title.php');
	include('includes/header-css.php');
	?>
</head>
<body>
	<div id="Body">

		<?php include("includes/header-top.php"); ?>
		<?php include("includes/header-return.php"); ?>



		<div class="index">
			<h3>Atualizar Usuário</h3>


			<form method="post" action="../../controller/ControllerUpdateUsuario.php">
				Nome: <input type="text" name="usuarioNome">
				Login: <input type="text" name="usuarioLogin">
				Senha: <input type="text" name="usuarioSenha">

				<br><br>

				<input type="submit" name="send" value="Enviar">
			</form>

		</div>



	</div>
</body>
</html>
