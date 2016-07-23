<?php

/**
 * Created by PhpStorm.
 * User: julio
 * Date: 15/07/16
 * Time: 18:00
 */
class Usuario{

    var $id_usuario;
    var $login;
    var $senha;
    var $nome;

    function __construct($newLogin, $newSenha, $newNome){
        $this->login = $newLogin;
        $this->email = $newNome;
        $this->senha = $newSenha;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getId(){
        return $this->id_usuario;
    }

    public function getLogin(){
        return $this->login;
    }


    public function setUserName($login){
        $this->login = $login;
    }


    public function getSenha(){
        return $this->senha;
    }


    public function setSenha($senha){
        $this->senha = $senha;
    }




}