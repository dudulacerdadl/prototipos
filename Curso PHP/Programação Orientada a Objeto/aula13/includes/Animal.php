<?php
abstract class Animal{
    private $peso, $idade, $membros;

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

    abstract function emitirSom();
}
?>