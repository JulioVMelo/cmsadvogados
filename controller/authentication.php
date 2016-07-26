<?php

require('../util/config.inc.php');
require('../model/Dao/Read.php');

$login = $_POST['username'];
$senha = $_POST['password'];

$read = new Read();

$read->VerificaAcesso($login,$senha);

$row =  $read->rowCount();

if($row > 0){
    session_start();
    $_SESSION['username'] =  $_POST['username'];
    $_SESSION['password'] =  $_POST['password'];
    echo "logado com sucesso";
}else{

}
echo $row;