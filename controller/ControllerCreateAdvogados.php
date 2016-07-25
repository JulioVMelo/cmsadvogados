<?php
  require('../util/config.inc.php');
  require('../model/Dao/Create.class.php');

  if (
    empty($_POST['advogadosNome']) ||
    empty($_POST['advogadosOab']) ||
    empty($_POST['advogadosDescricao'])
  ) {
    header("Location: ../view/cpadmin/erro.php");
    die;
  }else{
    $advogadosNome = $_POST['advogadosNome'];
    $advogadosOab = $_POST['advogadosOab'];
    $advogadosDescricao = $_POST['advogadosDescricao'];
  }

    $Advogados = new Create();
    $Dados = [
      'advogados_nome' => $advogadosNome,
      'advogados_oab' => $advogadosOab,
      'advogados_descricao' => $advogadosDescricao
    ];

    $Advogados->ExeCreate('tb_advogados',$Dados);

    if($Advogados->getResult()){
      header("Location: ../view/cpadmin/index.php");
    }else{
      header("Location: ../view/cpadmin/erro.php");
    }
?>
