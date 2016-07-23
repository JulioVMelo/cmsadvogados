<?php
    require '../util/config.inc.php';
    require '../model/Dao/Read.php';
    
    $read = new Read();
    $read->listAll('tb_redessociais','rede_id', 'ControllerDeleteRedesSociais');
