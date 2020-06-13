<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;

    public function Peixe($novoPeso, $novaIdade, $novoMembros, $novaCorEscama){
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

    public function soltarBolha(){
        echo "<br/><p>Soltou uma bolha</p>";
    }
    public function locomover(){
        echo "</br><p>Nadando...</p>";
    }
    public function alimentar(){
        echo "</br><p>Comendo substâncias...</p>";
    }
    public function emitirSom(){
        echo "</br><p>Peixe não faz som '-'</p>";
    }
}
?>