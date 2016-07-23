<?php

/**
 * Created by PhpStorm.
 * User: julio
 * Date: 15/07/16
 * Time: 21:08
 */
abstract class Conn{

    private static $Host = HOST;
    private static $User = USER;
    private static $Pass = PASS;
    private static $Dbsa = DBSA;

    private static $Connect = null;

    private static function Conectar(){
        try{
            if(self::$Connect == null):
                $dsn = 'mysql:host='.self::$Host . ';dbname=' . self::$Dbsa;
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                self::$Connect = new PDO($dsn, self::$User, self::$Pass,$options);
            endif;
        }catch (PDOException $e){
            echo "Erro de Conexão com o Banco de Dados";
            die;
        }

        self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$Connect;
    }

    protected static function getConn(){
        return self::Conectar();
    }

}
