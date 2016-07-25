<?php
  require('../util/config.inc.php');
  require('../model/Dao/Create.class.php');

  if (empty($_POST['SedeRua']) || empty($_POST['SedeNumero']) || empty($_POST['SedeBairro']) || empty($_POST['SedeComplemento']) ||
      empty($_POST['SedeCep']) || empty($_POST['SedeMapa']) || empty($_POST['SedeImagem'])
  ){
    header("Location: ../view/cpadmin/erro.php");
    die;
  }else{
    $sedeRua = $_POST['SedeRua'];
    $sedeNumero = $_POST['SedeNumero'];
    $sedeBairro = $_POST['SedeBairro'];
    $sedeComplemento = $_POST['SedeComplemento'];
    $sedeCep = $_POST['SedeCep'];
    $sedeMapa = $_POST['SedeMapa'];
    $sedeImagem = $_POST['SedeImagem'];
  }
  
  $Sede = new Create;

  $Dados = [
    'sede_rua' => $sedeRua,
    'sede_numero' => $sedeNumero,
    'sede_bairro' => $sedeBairro,
    'sede_complemento' => $sedeComplemento,
    'sede_cep' => $sedeCep,
    'sede_mapa' => $sedeMapa,
    'sede_imagem' => $sedeImagem
  ];

  $Sede->ExeCreate('tb_sede_empresa', $Dados);


  if($Sede->getResult()){
    header("Location: ../view/cpadmin/index.php");
  }else{
    header("Location: ../view/cpadmin/erro.php");
  }
?>
