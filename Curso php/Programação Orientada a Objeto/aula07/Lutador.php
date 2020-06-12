<?php
class Lutador{
    /*Atributos*/
    private $nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates;
    /*Métodos Especiais*/
    public function Lutador($nome, $nacionalidade, $idade, $altura, $peso, $vitoria, $derrota, $empate){
        $this -> setNome($nome);
        $this -> setNacionalidade($nacionalidade);
        $this -> setIdade($idade);
        $this -> setAltura($altura);
        $this -> setPeso($peso);
        $this -> setVitorias($vitoria);
        $this -> setDerrotas($derrota);
        $this -> setEmpates($empate);
    }
    public function getNome(){
        return $this -> nome;
    }
    public function getNacionalidade(){
        return $this -> nacionalidade;
    }
    public function getIdade(){
        return $this -> idade;
    }
    public function getAltura(){
        return $this -> altura;
    }
    public function getPeso(){
        return $this -> peso;
    }
    public function getCategoria(){
        return $this -> categoria;
    }
    public function getVitorias(){
        return $this -> vitorias;
    }
    public function getDerrotas(){
        return $this -> derrotas;
    }
    public function getEmpates(){
        return $this -> empates;
    }
    public function setNome($nome){
        $this -> nome = $nome;
    }
    public function setNacionalidade($nacionalidade){
        $this -> nacionalidade = $nacionalidade;
    }
    public function setIdade ($idade){
        $this -> idade = $idade;
    }
    public function setAltura($altura){
        $this -> altura = $altura;
    }
    public function setPeso($peso){
        $this -> peso = $peso;
        $this -> setCategoria();
    }
    private function setCategoria(){
        if($this -> getPeso() < 52.2 || $this -> getPeso() > 120){
            $this -> categoria = "Inválido";
        } elseif($this -> getPeso() <= 70.3){
            $this -> categoria = "Leve";
        } elseif($this -> getPeso() <= 83.9){
            $this -> categoria = "Médio";
        } else {
            $this -> categoria = "Pesado";
        }
    }
    public function setVitorias($vitoria){
        $this -> vitorias = $vitoria;
    }
    public function setDerrotas($derrota){
        $this -> derrotas = $derrota;
    }
    public function setEmpates($empate){
        $this -> empates = $empate;
    }
    /*Métodos*/
    public function apresentar(){
        print "<br/>Lutador: {$this -> getNome()}<br/>";
        print "Origem: {$this -> getNacionalidade()}<br/>";
        print "{$this -> getIdade()} anos<br/>";
        print "{$this -> getAltura()}m de altura<br/>";
        print "Pesando: {$this -> getPeso()}Kg<br/>";
        print "Ganhou: {$this -> getVitorias()}<br/>";
        print "Perdeu: {$this -> getDerrotas()}<br/>";
        print "Empatou: {$this -> getEmpates()}<br/>";
    }
    public function status(){
        print "<br/>{$this -> getNome()} é um peso {$this -> getCategoria()}, com {$this -> getVitorias()} vitórias, {$this -> getDerrotas()} derrotas e {$this -> getEmpates()} empates";
    }
    public function ganharLuta(){
        $this -> setVitorias($this ->getVitorias() + 1);
    }
    public function perderLuta(){
        $this -> setDerrotas($this -> getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this-> setEmpates($this -> getEmpates() + 1);
    }
}
?>