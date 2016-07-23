<?php
/**
 * Created by PhpStorm.
 * User: Jefferson Bessa
 * Date: 21/07/2016
 * Time: 23:01
 */

class Sede {

    var $id_sede;
    var $cep;
    var $rua;
    var $bairro;
    var $numero;
    var $mapa;
    var $complemento;
    var $imagem;

    function __construct($newCep, $newRua, $newBairro, $newNumero, $newMapa, $newComplemento, $newImagem)
    {
        $this->cep = $newCep;
        $this->rua = $newRua;
        $this->bairro = $newBairro;
        $this->numero = $newNumero;
        $this->mapa = $newMapa;
        $this->complemento = $newComplemento;
        $this->imagem = $newImagem;
    }

    public function getIdSede(){
        return $this->id_sede;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getRua(){
        return $this->rua;
    }

    public function setRua($rua){
        $this->rua = $rua;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getMapa(){
        return $this->mapa;
    }

    public function setMapa($mapa){
        $this->mapa = $mapa;
    }

    public function getComplemento(){
        return $this->complemento;
    }

    public function setComplemento($complemento){
        $this->complemento = $complemento;
    }

    public function getImagem(){
        return $this->imagem;
    }

    public function setImagem($imagem){
        $this->imagem = $imagem;
    }

}