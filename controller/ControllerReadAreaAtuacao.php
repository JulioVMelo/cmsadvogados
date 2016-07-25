<?php
    require '../../util/config.inc.php';
    require '../../model/Dao/ReadAdmin.php';

    $read = new ReadAdmin();
    $read->listAll('tb_area_atuacao','area_id', 'ControllerDeleteAreaAtuacao','');