<?php
  require('../util/config.inc.php');
  require('../model/Dao/Create.class.php');

  if (empty($_POST['RedeSocialUsername']) || empty($_POST['RedeSocialIcone']) || empty($_POST['RedeSocialLink'])) {
    header("Location: ../view/cpadmin/erro.php");
    die;
  }else{
    $RedeSocialUsername = $_POST['RedeSocialUsername'];
    $RedeSocialIcone = $_POST['RedeSocialIcone'];
    $RedeSocialLink = $_POST['RedeSocialLink'];
  }

  $RedeSocial = new Create;
  $Dados = [
    'rede_username' => $RedeSocialUsername,
    'rede_icone' => $RedeSocialIcone,
    'rede_link' => $RedeSocialLink
  ];

  $RedeSocial -> ExeCreate('tb_redessociais', $Dados);

  if($RedeSocial->getResult()){
    header("Location: ../view/cpadmin/index.php");
  }else{
    header("Location: ../view/cpadmin/erro.php");
  }
?>
