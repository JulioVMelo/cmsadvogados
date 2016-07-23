<?php
  require('../util/config.inc.php');
  require('../model/Dao/Create.class.php');

  if (
    empty($_POST['AreaTitulo']) ||
    empty($_POST['AreaDescricao'])
  ) {
    header("Location: ../view/cpadmin/erro.php");
    die;
  }else{
    $AreaTitulo = $_POST['AreaTitulo'];
    $AreaDescricao = $POST['AreaDescricao'];
  }
  
  $AreaAtuacao = new Create;
  $Dados = [
    'area_titulo' => $AreaTitulo,
    'area_descricao' => $AreaDescricao
  ];

  $AreaAtuacao -> ExeCreate('tb_area_atuacao', $Dados);

  if($AreaAtuacao->getResult()){
    header("Location: ../view/cpadmin/sucesso.php");
  }else{
    header("Location: ../view/cpadmin/erro.php");
  }
?>
