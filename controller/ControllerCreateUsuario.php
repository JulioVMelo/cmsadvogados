<?php
  require('../util/config.inc.php');
  require('../model/Dao/Create.class.php');

  if (
    empty($_POST['usuarioNome']) ||
    empty($_POST['usuarioLogin']) ||
    empty($_POST['usuarioSenha'])
  ) {
    header("Location: ../view/cpadmin/erro.php");
    die;
  }else{
    $usuarioNome = addslashes(trim($_POST['usuarioNome']));
    $usuarioLogin = sha1(md5($_POST['usuarioLogin']));
    $usuarioSenha = sha1(md5($_POST['usuarioSenha']));
  }

  $Usuario = new Create;

  $Dados = [
    'usuario_nome' => $usuarioNome,
    'usuario_login' => $usuarioLogin,
    'usuario_senha' => $usuarioSenha
  ];

  $Usuario->ExeCreate('tb_usuario', $Dados);


  if($Usuario->getResult()){
    header("Location: ../view/cpadmin/sucesso.php");
  }else{
    header("Location: ../view/cpadmin/erro.php");
  }
?>
