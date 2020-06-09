<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;

    public function ControleRemoto(){
        $this -> volume = 50;
        $this -> ligado = false;
        $this -> tocando = false;
    }

    private function getVolume(){
        return $this -> volume;
    }
    private function setVolume($novoVolume){
        $this -> volume = $novoVolume;
    }
    private function getLigado(){
        return $this -> ligado;
    }
    private function setLigado($novoLigado){
        $this -> ligado = $novoLigado;
    }
    private function getTocando(){
        return $this -> tocando;
    }
    private function setTocando($novoTocando){
        $this -> tocando = $novoTocando;
    }

    public function ligar() {
        $this -> setLigado(true);
    }
    public function desligar(){
        $this -> setLigado(false);
    }
    public function abrirMenu(){
        print "<br/>Está ligado? " . ($this -> getLigado() ? "SIM":"NÃO");
        print "<br/>Está tocando? " . ($this -> getTocando() ? "SIM":"NÃO");
        print "<br/>Volume: {$this -> getVolume()} ";
        for($i = 0; $i<= $this -> getVolume(); $i += 5){
            print "|";
        }
    }
    public function fecharMenu(){
        print "<br/>Fechando menu...";
    }
    public function maisVolume(){
        if($this -> getLigado() && $this -> getVolume() < 100){
            $this -> setVolume($this -> getVolume() + 1);
        } else {
            $this -> setVolume(100);
        }
    }
    public function menosVolume(){
        if($this -> getLigado() && $this -> getVolume() > 0){
            $this -> setVolume($this -> getVolume() - 1);
        } else {
            $this -> setVolume(0);
        }
    }
    public function ligarMudo(){
        if($this -> getLigado() && $this -> getVolume() != 0){
            $this -> setVolume(0);
        }
    }
    public function desligarMudo(){
        if($this -> getLigado() && $this -> getVolume() == 0){
            $this -> setVolume(50);
        }
    }
    public function play(){
        if($this -> getLigado() &! $this -> getTocando()){
            $this -> setTocando(true);
        }
    }
    public function pause(){
        if($this -> getLigado() && $this -> getTocando()){
            $this -> setTocando(false);
        }
    }
}
?>