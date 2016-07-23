<?php
/**
 * Created by PhpStorm.
 * User: Jefferson Bessa
 * Date: 21/07/2016
 * Time: 23:33
 */

class AreaAtuacao {

    var $id_atuacao;
    var $titulo;
    var $descricao;

    function __construct($newIdAtuacao, $newTitulo, $newDescricao)
    {
        $this->id_atuacao = $newIdAtuacao;
        $this->titulo = $newTitulo;
        $this->descricao = $newDescricao;
    }

    public function getIdAtuacao(){
        return $this->id_atuacao;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }



}