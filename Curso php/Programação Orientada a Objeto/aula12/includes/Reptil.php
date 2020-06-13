<?php
require_once 'Animal.php';
class Reptil extends Animal{
    private $corEscama;

    public function Reptil($novoPeso, $novaIdade, $novoMembros, $novaCorEscama){
        $this-> setPeso($novoPeso);
        $this-> setIdade($novaIdade);
        $this-> setMembros($novoMembros);
        $this-> setCorEscama($novaCorEscama);
    }
    public function getCorEscama(){
        return $this-> corEscama;
    }
    public function setCorEscama($novaCorEscama){
        $this-> corEscama = $novaCorEscama;
    }
    
    public function locomover(){
        echo "</br><p>Rastejando...</p>";
    }
    public function alimentar(){
        echo "</br><p>Comendo vegetais (???)...</p>";
    }
    public function emitirSom(){
        echo "</br><p>Grunindo...</p>";       
    }
}
?>