<?php
require '../util/Conn.php';

class read extends Conn{

     function listTable($tabela, $id){
        $result = parent::getConn()->query("SELECT * from $tabela ORDER BY $id DESC LIMIT 1");
        
        if ($result) {
            echo "<h1>listagem na tabela $tabela, realizada com suceso </h1>";

            foreach ($result as $row) {
                echo $row[$id];

            }
        }else{
            echo "Nenhum Registro Encontrado";
        }
    }
    
    
}






