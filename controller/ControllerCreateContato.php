<?php
	require('../util/config.inc.php');
	require('../model/Dao/Create.class.php');

	if (
		empty($_POST['contatoTelefoneFixo']) ||
		empty($_POST['contatoTelefoneMovel'])
	) {
		header("Location: ../view/cpadmin/erro.php");
		die;
	}else{
		$contatoTelefoneFixo = $_POST['contatoTelefoneFixo'];
		$contatoTelefoneMovel = $_POST['contatoTelefoneMovel'];
	}

		$Contato = new Create();
		$Dados = [
			'contato_numerofixo' => $contatoTelefoneFixo,
			'contato_numeromovel' => $contatoTelefoneMovel
		];

		$Contato->ExeCreate('tb_contato',$Dados);

		if($Contato->getResult()){
			header("Location: ../view/cpadmin/index.php");
		}else{
			header("Location: ../view/cpadmin/erro.php");
		}
	?>
