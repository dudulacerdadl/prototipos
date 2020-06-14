<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtida;
    private $reproduzir;

    public function Video($novoTitulo){
        $this-> setTitulo($novoTitulo);
        $this-> setAvaliacao(1);
        $this-> setViews(0);
        $this-> setCurtida(0);
        $this-> setReproduzir(false);
    }

    public function getTitulo(){
        return $this-> titulo;
    }
    public function getAvaliacao(){
        return $this-> avaliacao;
    }
    public function getViews(){
        return $this-> views;
    }
    public function getCurtida(){
        return $this-> curtida;
    }
    public function getReproduzir(){
        return $this-> reproduzir;
    }
    public function setTitulo($novoTitulo){
        $this-> titulo = $novoTitulo;
    }
    public function setAvaliacao($novaAvaliacao){
        $this-> avaliacao = $novaAvaliacao;
    }
    public function setViews($novaViews){
        $this-> views += $novaViews;
    }
    public function setCurtida($novaCurtida){
        $this-> curtida += $novaCurtida;
    }
    public function setReproduzir($novoReproduzir){
        $this-> reproduzir = $novoReproduzir;
    }

    public function play(){
        if ($this-> reproduzir == false){
            $this-> setReproduzir(true);
            echo "<br/><p>Reproduzindo!</p>";
        }
    }
    public function pause(){
        if ($this-> getReproduzir()){
            $this-> setReproduzir(false);
            echo "<br/><p>Pausado!</p>";
        }
    }
    public function like($novoLike){
        if($novoLike == "like"){
            $this-> setCurtida(1);
        } elseif ($novoLike == "deslike"){
            $this-> setCurtida(-1);
        }
    }
}
?>