<?php


require  '../model/Dao/Update.php';
require '../util/config.inc.php';


$update = new update();
$tabela = 'tb_usuario';

$identificador = $_POST['identificador'];
$nome = $_POST['usuarioNome'];

$dados = ['usuario_nome'=>$nome];
$update->ExeUpdate($tabela,$dados,'WHERE usuario_id = :id','id='.$id);

if($update->getResult()){
    echo "{$update->getRowCount()} dados atualizados com sucesso";
    echo '<echo>';
}
