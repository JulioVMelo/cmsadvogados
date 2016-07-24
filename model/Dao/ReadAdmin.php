<?php
require '../../util/Conn.php';

class readadmin extends Conn{

    function listAll($tabela, $campoTbIdentificador, $controllerDelete, $controllerUpdate){

        $result = parent::getConn()->query("SELECT * from $tabela");
        if ($result) {
            echo "<h1>listagem na tabela $tabela, realizada com suceso </h1>";

            foreach ($result as $row) {     
                echo "ID: " . $row[$campoTbIdentificador] . "<br>";

                

                $identificador = $row[$campoTbIdentificador];
                echo"
                <form action='../../controller/$controllerDelete.php' method='post'>       
                    <button type='submit' name='identificador' value='$identificador'>DELETAR</button>
                </form>
                
                <form action='$controllerUpdate.php' method='post'>       
                    <button type='submit' name='identificador' value='$identificador'>Atualizar</button>
                </form>
                ";
                echo "<hr>";
            }
        }else{
            echo "Nenhum Registro Encontrado";
        }

    }




    static function listById($tabela, $campo, $identificador){
        $sth = parent::getConn()->prepare("SELECT * from $tabela WHERE $campo = $identificador");
        $sth->execute();
        $result = $sth->fetchAll();

        return $result;
    }




    
    
}






