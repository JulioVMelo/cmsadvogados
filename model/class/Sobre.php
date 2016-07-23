<?php


class Sobre{

    var $id_sobre;
    var $descricao;
    var $titulo;
   
    public function getIdSobre(){
        return $this->id_sobre;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    
}