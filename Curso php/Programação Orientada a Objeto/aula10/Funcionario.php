<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;

    public function Funcionario($novoNome, $novaIdade, $novoSexo){
        $this-> setNome($novoNome);
        $this-> setIdade($novaIdade);
        $this-> setSexo($novoSexo);
    }
    public function getSetor(){
        return $this-> setor;
    }
    public function getTrabalhando(){
        return $this-> trabalhando;
    }
    public function setSetor($novoSetor){
        $this-> setor = $novoSetor;
    }
    public function setTrabalhando($novoTrabalhando){
        $this-> trabalhando = $novoTrabalhando;
    }

    public function mudarTrabalho(){
        if ($this-> getTrabalhando()){
            $this-> setTrabalhando(false);
        } else {
            $this-> setTrabalhando(true);
        }
    }
}
?>