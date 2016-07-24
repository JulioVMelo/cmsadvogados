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


		<div class="index">
		<h3>Selecione uma Opção</h3>

			<div class="blocoSessao">
				<h4>Advogados</h4>
				<i class="fa fa-floppy-o"  onclick="location.href='create-advogados.php'"></i>
				<i class="fa fa-list-alt" onclick="location.href='javascript:void(0);'"></i>
			</div>

			<div class="blocoSessao">
				<h4>Área de Atuação</h4>
				<i class="fa fa-floppy-o"  onclick="location.href='javascript:void(0);'"></i>
				<i class="fa fa-list-alt" onclick="location.href='javascript:void(0);'"></i>
			</div>

			<div class="blocoSessao">
				<h4>Telefones de Contato</h4>
				<i class="fa fa-floppy-o"  onclick="location.href='create-contato.php'"></i>
				<i class="fa fa-list-alt" onclick="location.href='javascript:void(0);'"></i>
			</div>

			<div class="blocoSessao">
				<h4>Redes Sociais</h4>
				<i class="fa fa-floppy-o"  onclick="location.href='javascript:void(0);'"></i>
				<i class="fa fa-list-alt" onclick="location.href='javascript:void(0);'"></i>
			</div>

			<div class="blocoSessao">
				<h4>Local da Empresa</h4>
				<i class="fa fa-floppy-o"  onclick="location.href='create-sede.php'"></i>
				<i class="fa fa-list-alt" onclick="location.href='javascript:void(0);'"></i>
			</div>

			<div class="blocoSessao">
				<h4>Sobre Descrição</h4>
				<i class="fa fa-floppy-o"  onclick="location.href='create-sobre.php'"></i>
				<i class="fa fa-list-alt" onclick="location.href='javascript:void(0);'"></i>
			</div>

			<div class="blocoSessao">
				<h4>Usuários</h4>
				<i class="fa fa-floppy-o"  onclick="location.href='create-usuario.php'"></i>
				<i class="fa fa-list-alt" onclick="location.href='list-usuario.php'"></i>
			</div>



		</div>



	</div>
</body>
</html>
