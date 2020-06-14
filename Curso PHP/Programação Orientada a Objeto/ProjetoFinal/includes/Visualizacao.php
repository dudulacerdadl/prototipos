<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao{
    private $espectador;
    private $filme;

    public function Visualizacao($novoEspectador, $novoFilme){
        $this-> setEspectador($novoEspectador);
        $this-> setFilme($novoFilme);
        $this-> filme -> setViews($this-> filme -> getViews() + 1);
        $this-> filme -> play();
        $this-> espectador -> viuMaisUm(1);
    }
    public function getEspectador(){
        return $this-> espectador;
    }
    public function getFilme(){
        return $this-> filme;
    }
    public function setEspectador($novoEspectador){
        $this-> espectador = $novoEspectador;
    }
    public function setFilme($novoFilme){
        $this-> filme = $novoFilme;
    }

    public function avaliar(){
        $this-> filme -> like();
    }
    public function avaliarNota($nota){
        if ($nota >= 0 && $nota <= 10){
            $this-> filme -> setAvaliacao($nota);
        } elseif($nota < 10){
            $this-> filme -> setAvaliacao(10);
        } else {
            $this-> filme -> setAvaliacao(0);
        }
    }
    public function avaliarPorc($porc){
        $nota = 0;
        if($porc >= 0 && $porc <= 20){
            $nota = 3;
        } elseif ($porc <= 50){
            $nota = 5;
        } elseif ($porc <= 90){
            $nota = 8;
        } elseif ($porc < 90){
            $nota = 10;
        }
        $this-> filme -> setAvaliação($nota);
    }
}
?>