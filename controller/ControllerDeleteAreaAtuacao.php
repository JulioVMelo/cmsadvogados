<?php
require '../util/config.inc.php';
require '../model/Dao/Delete.php';


$delete = new delete();
$identificador = $_POST['identificador'];

$delete->deleteById($identificador,'tb_area_atuacao','area_id');