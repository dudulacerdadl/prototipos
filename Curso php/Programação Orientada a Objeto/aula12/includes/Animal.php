<?php
abstract class Animal{
    protected $peso;
    protected $idade;
    protected $membros;

    public function getPeso(){
        return $this-> peso;
    }
    public function getIdade(){
        return $this-> idade;
    }
    public function getMembros(){
        return $this-> membros;
    }
    public function setPeso($novoPeso){
        $this-> peso = $novoPeso;
    }
    public function setIdade($novaIdade){
        $this-> idade = $novaIdade;
    }
    public function setMembros($novoMembros){
        $this-> membros = $novoMembros;
    }

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();
}
?>