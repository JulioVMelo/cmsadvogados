<?php
  require('../util/config.inc.php');
  require('../model/Dao/Create.class.php');

  if (
    empty($_POST['AreaTitulo']) ||
    empty($_POST['AreaDescricao']) ||
    empty($_POST['AreaCategoria'])
  ) {
    header("Location: ../view/cpadmin/erro.php");
    die;
  }else{
    $AreaTitulo = $_POST['AreaTitulo'];
    $AreaDescricao = $_POST['AreaDescricao'];
    $AreaCategoria = $_POST['AreaCategoria'];
  }
  
  $AreaAtuacao = new Create;
  $Dados = [
    'area_titulo' => $AreaTitulo,
    'area_descricao' => $AreaDescricao,
    'categoria' => $AreaCategoria
  ];

  $AreaAtuacao -> ExeCreate('tb_area_atuacao', $Dados);

  if($AreaAtuacao->getResult()){
    header("Location: ../view/cpadmin/index.php");
  }else{
    header("Location: ../view/cpadmin/erro.php");
  }
?>
