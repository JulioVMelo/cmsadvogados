<?php
require '../util/config.inc.php';
require '../model/Dao/Delete.php';


$identificador = $_POST['identificador'];
$delete = new delete();

$delete->deleteById($identificador,'tb_advogados','advogados_id');