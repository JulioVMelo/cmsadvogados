<?php
require '../../util/Conn.php';

class readadmin extends Conn{

    function listAll($tabela, $campoTbIdentificador, $controllerDelete){

        $result = parent::getConn()->query("SELECT * from $tabela");
        if ($result) {
            echo "<h1>listagem na tabela $tabela, realizada com suceso </h1>";

            foreach ($result as $row) {     
                echo $row[$campoTbIdentificador] . "<br> <hr>";

                $identificador = $row[$campoTbIdentificador];

                echo"
                    <form action='../../controller/$controllerDelete.php' method='post'>       
                        <button type='submit' name='identificador' value='$identificador'>DELETAR</button>
                    </form>
                ";
                echo"
                    <form action='.php' method='post'>       
                        <button type='submit' name='identificador' value='$identificador'>Atualizar</button>
                    </form>
                ";

            }
        }else{
            echo "Nenhum Registro Encontrado";
        }

    }
    
    
}






