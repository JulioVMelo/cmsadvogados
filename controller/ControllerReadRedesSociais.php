<?php
    require '../../util/config.inc.php';
    require '../../model/Dao/ReadAdmin.php';
    
    $read = new ReadAdmin();
    $read->listAll('tb_redessociais','rede_id', 'ControllerDeleteRedesSociais',"");
