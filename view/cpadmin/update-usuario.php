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

			<?php
			$identificador = $_POST['identificador'];
			require ('../../util/config.inc.php');
			require ('../../model/Dao/ReadAdmin.php');

			$teste = ReadAdmin::listById('tb_usuario','usuario_id', $identificador);


			foreach ($teste as $row) {
				$NOME = $row['usuario_nome'];
				$LOGIN = $row['usuario_login'];
				$SENHA = $row['usuario_senha'];

				echo" <form method='post' action='../../controller/ControllerUpdateUsuario.php'><br>
				Login: <input type='text' name='usuarioLogin' value='".$LOGIN."' readonly class='readonly'><br>
				Senha: <input type='text' name='usuarioSenha' value='".$SENHA."' readonly class='readonly'><br>
				Nome: <input type='text' name='usuarioNome' value='".$NOME."'>

				<br><br>

				<button type='submit' name='identificador' value='$identificador'> ATUALIZAR </button>
			</form>
			";
		}
		?>

	</div>



</div>
</body>
</html>
