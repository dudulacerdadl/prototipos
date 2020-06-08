<?php
class Conta{
    private $numero;
    private $titular;
    private $saldo;

    public function Conta($numero, $titular){
        $this -> numero = $numero;
        $this -> titular = $titular;
    }

    public function getNumero(){
        return $this -> numero;
    }
    public function getSaldo(){
        return $this -> saldo;
    }
    public function getTitular(){
        return $this -> titular;
    }
    public function setTitular($novoTitular){
        $this -> titular = $novoTitular;
    }
}
?>