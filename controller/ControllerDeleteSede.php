<?php
require '../util/config.inc.php';
require '../model/Dao/Delete.php';


$delete = new delete();
$identificador = $_POST['identificador'];

$delete->deleteById($identificador,'tb_sede_empresa','sede_id');