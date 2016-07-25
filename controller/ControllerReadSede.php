<?php
    require '../../util/config.inc.php';
    require '../../model/Dao/ReadAdmin.php';

    $read = new ReadAdmin();
    $read->listAll('tb_sede_empresa','sede_id', 'ControllerDeleteSede','');