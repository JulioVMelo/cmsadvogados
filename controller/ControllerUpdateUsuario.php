<?php


require  '../model/Dao/Update.php';
require '../util/config.inc.php';


$update = new update();
$tabela = 'tb_usuario';
$id = $_POST['identificador'];
$nome = $_POST['nome'];
$usuario_login = $_POST['login'];
$usuario_senha = $_POST['senha'];

$dados = ['usuario_nome'=>$nome, 'usuario_login'=>$usuario_login, 'usuario_senha'=>$usuario_senha];
$update->ExeUpdate($tabela,$dados,'WHERE usuario_id = :id','id='.$id);

if($update->getResult()){
    echo "{$update->getRowCount()} dados atualizados com sucesso";
    echo '<echo>';
}
