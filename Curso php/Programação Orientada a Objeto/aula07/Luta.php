<?php
require_once 'Lutador.php';
class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function getDesafiado(){
        return $this -> desafiado;
    }
    public function getDesafiante(){
        return $this -> desafiante;
    }
    public function getRounds(){
        return $this -> rounds;
    }
    public function getAprovada(){
        return $this -> aprovada;
    }
    public function setDesafiado($desafiado){
        $this -> desafiado = $desafiado;
    }
    public function setDesafiante($desafiante){
        $this -> desafiante = $desafiante;
    }
    public function setRounds($rounds){
        $this -> rounds = $rounds;
    }
    public function setAprovada($aprovada){
        $this -> aprovada = $aprovada;
    }

    public function marcarLuta($lut1, $lut2){
        if($lut1 -> getCategoria() === $lut2 -> getCategoria() && ($lut1 != $lut2)){
            $this -> setAprovada(true);
            $this -> setDesafiado($lut1);
            $this -> setDesafiante($lut2);
        } else {
            $this -> setAprovada(false);
            $this -> setDesafiado(null);
            $this -> setDesafiante(null);
        }
    }
    public function lutar(){
        if($this -> getAprovada()){
            $this -> desafiado -> apresentar();
            $this -> desafiante -> apresentar();
            $vencedor = rand(0, 2);
            switch($vencedor){
                case 0:
                    print "<br/><p>Empate!</p>";
                    $this -> desafiado -> empatarLuta();
                    $this -> desafiante -> empatarLuta();
                break;
                case 1:
                    print "<br/><p>{$this -> desafiado -> getNome()} venceu!</p>";
                    $this -> desafiado -> ganharLuta();
                    $this -> desafiante -> perderLuta();
                break;
                case 2:
                    print "<br/><p>{$this -> desafiante -> getNome()} venceu!</p>";
                    $this -> desafiado -> perderLuta();
                    $this -> desafiante -> ganharLuta();
                break;
            }
        } else {
            print "<p>Luta não pode acontecer</p>";
        }
    }
}
?>