<?php
class Conta{
    public $numConta;
    protected $tipo;
    private $titular;
    private $saldo;
    private $status;

    public function Conta(){
        $this -> getStatus(false);
        $this -> getSaldo(0);
    }

    /*$this -> numConta = $numConta;
        $this -> titular = $titular;
        $this -> tipo = $tipo = "cc" || "cp";
        */
    public function getNumConta(){
        return $this -> numConta;
    }
    public function setNumConta($novoNumConta){
        $this -> numConta = $novoNumConta;
    }
    public function getTipo(){
        return $this -> tipo;
    }
    public function setTipo($novoTipo){
        $this -> tipo = $novoTipo;
    }
    public function getSaldo(){
        return $this -> saldo;
    }
    public function setSaldo($novoSaldo){
        $this -> saldo = $novoSaldo;
    }
    public function getTitular(){
        return $this -> titular;
    }
    public function setTitular($novoTitular){
        $this -> titular = $novoTitular;
    }
    public function getStatus(){
        return $this -> status;
    }
    public function setStatus($novoStatus){
        $this -> status = $novoStatus;
    }

    public function abrirConta($novoTipo, $novoTitular){
        $this -> setTipo($novoTipo);
        $this -> setTitular($novoTitular);
        $this -> setNumConta(random_int(1000, 9999));
        $this -> setStatus(true);
        if ($novoTipo == "CC"){
            $this -> setSaldo(50);
        } elseif ($novoTipo == "CP") {
            $this -> setSaldo(150);
        }
    }
    public function fecharConta(){
        if ($this -> getSaldo() > 0){
            print "<p>Conta com saldo!</p>";
        } elseif ($this -> getSaldo() < 0) {
            print "<p>Conta em débito!</p>";
        } else {
            $this -> setStatus(false);
        }
    }
    public function depositar($deposito){
        if ($this -> getStatus()){
            $this -> setSaldo($this -> getSaldo() + $deposito);
        } else {
            print "[ERRO]";
        }
    }
    public function sacar($saque){
        if ($this -> getStatus()){
            if ($this -> getSaldo() >= $saque){
                $this -> setSaldo($this -> getSaldo() - $saque);
            } else {
                print "<p>Saldo insuficiênte</p>";
            }
        } else {
            print "[ERRO]";
        }
    }
    public function pagarMensal(){
        if ($this -> getTipo() == "CC" && $this -> getStatus(true)){
            $this -> saldo -= 12;
        } elseif ($this -> getTipo() == "CP" && $this -> getStatus(true)){
            $this -> saldo -= 20;
        }
    }
}
?>