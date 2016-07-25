<?php
    require '../../util/config.inc.php';
    require '../../model/Dao/ReadAdmin.php';

    $read = new ReadAdmin();
    $read->listAll('tb_contato','contato_id','ControllerDeleteContato','');
