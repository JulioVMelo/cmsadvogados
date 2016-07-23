<?php


class Contato{

    var $id_contato;
    var $telefoneFixo;
    var $telefoneMovel;

    function __construct($newId_contato, $newTelefoneFixo, $newTelefoneMovel){
        $this->id_contato = $newId_contato;
        $this->telefoneFixo = $newTelefoneFixo;
        $this->telefoneMovel = $newTelefoneMovel;
    }

    public function getIdContato(){
        return $this->id_contato;
    }

    public function setIdContato($id_contato){
        $this->id_contato = $id_contato;
    }

    public function getTelefoneFixo(){
        return $this->telefoneFixo;
    }

    public function setTelefoneFixo($telefoneFixo){
        $this->telefoneFixo = $telefoneFixo;
    }

    public function getTelefoneMovel(){
        return $this->telefoneMovel;
    }

    public function setTelefoneMovel($telefoneMovel){
        $this->telefoneMovel = $telefoneMovel;
    }

}