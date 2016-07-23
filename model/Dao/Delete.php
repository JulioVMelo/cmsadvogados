<?php

require '../util/Conn.php';

class delete extends Conn{

    function deleteById($identificador, $tabela, $chavePK){

        $result = parent::getConn()->query("delete from $tabela Where $chavePK = $identificador ");

    }

}