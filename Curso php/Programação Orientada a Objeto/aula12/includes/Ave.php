<?php
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;

    public function Ave($novoPeso, $novaIdade, $novoMembros, $novaCorPena){
        $this-> setPeso($novoPeso);
        $this-> setIdade($novaIdade);
        $this-> setMembros($novoMembros);
        $this-> setCorPena($novaCorPena);
    }
    public function getCorPena(){
        return $this-> corPena;
    }
    public function setCorPena($novaCorPena){
        $this-> corPena = $novaCorPena;
    }

    public function fazerNinho(){
        echo "</br><p>Fez um ninho</p>";
    }
    public function locomover(){
        echo "<br><p>Voando...</p>";
    }
    public function alimentar(){
        echo "</br><p>Comendo frutas...</p>";
    }
    public function emitirSom(){
        echo "</br><p>Cantando...</p>";
    }
}
?>