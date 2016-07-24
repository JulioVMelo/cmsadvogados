<?php
	require('../util/config.inc.php');
	require('../model/Dao/Create.class.php');

	if (empty($_POST['sobreTitulo']) ||	empty($_POST['sobreDescricao'])
	){
		header("Location: ../view/cpadmin/erro.php");
		die;
	}else{
		$sobreTitulo = $_POST['sobreTitulo'];
		$sobreDescricao = $_POST['sobreDescricao'];
	}

	$Sobre = new Create();
	$Dados = [
		'sobre_titulo' => $sobreTitulo,
		'sobre_descricao' => $sobreDescricao
	];

	$Sobre->ExeCreate('tb_sobre',$Dados);

	if($Sobre->getResult()){
		header("Location: ../view/cpadmin/sucesso.php");
	}else{
		header("Location: ../view/cpadmin/erro.php");
	}
?>
