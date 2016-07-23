<?php
/**
 * Created by PhpStorm.
 * User: Jefferson Bessa
 * Date: 21/07/2016
 * Time: 23:19
 */

class RedesSociais {

    var $id_redeSocial;
    var $nome;
    var $icone;
    var $link;

    function __construct($newIdRedeSocial, $newNome, $NewIcone, $NewLink){
        $this->$id_redeSocial = $newIdRedeSocial;
        $this->$nome = $newNome;
        $this->$icone = $NewIcone;
        $this->$link = $NewLink;
    }

    public function getIdRedeSocial(){
        return $this->id_redeSocial;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIcone(){
        return $this->icone;
    }

    public function setIcone($icone){
        $this->icone = $icone;
    }

    public function getLink(){
        return $this->link;
    }

    public function setLink($link){
        $this->link = $link;
    }

}