<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;

    public function getCorPelo(){
        return $this-> corPelo;
    }
    public function setCorPelo($novaCorPelo){
        $this-> corPelo = $novaCorPelo;
    }

    public function emitirSom(){
        echo "</br><p>Sons de mamífero...</p>";
    }
}
?>