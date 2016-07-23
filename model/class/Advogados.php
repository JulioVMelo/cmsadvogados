<?php


class Advogados{
    var $id_advogado;
    var $oab;
    var $descricao;

    function __construct($newId, $newOab, $newDescricao){
        $this->id_advogado = $newId;
        $this->oab = $newOab;
        $this->descricao = $newDescricao;
    }

    public function getIdAdvogado(){
        return $this->id_advogado;
    }

    public function setIdAdvogado($id_advogado){
        $this->id_advogado = $id_advogado;
    }

    public function getOab(){
        return $this->oab;
    }

    public function setOab($oab){
        $this->oab = $oab;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }


}