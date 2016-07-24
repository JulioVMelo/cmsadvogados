<?php
    require '../../util/config.inc.php';
    require '../../model/Dao/ReadAdmin.php';

    $read = new ReadAdmin();
    $read->listAll('tb_usuario','usuario_id', 'ControllerDeleteUsuario','update-usuario');
