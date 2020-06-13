<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;

    public function Mamifero($novoPeso, $novaIdade, $novoMembros, $novaCorPelo){
        $this-> setPeso($novoPeso);
        $this-> setIdade($novaIdade);
        $this-> setMembros($novoMembros);
        $this-> setCorPelo($novaCorPelo);
    }
    public function getCorPelo(){
        return $this-> corPelo;
    }
    public function setCorPelo($novaCorPelo){
        $this-> corPelo = $novaCorPelo;
    }

    public function locomover(){
        echo "</br><p>Correndo...</p>";
    }
    public function alimentar(){
        echo "</br><p>Mamando...</p>";
    }
    public function emitirSom(){
        echo "</br><p>Critando...</p>";
    }
}
?>