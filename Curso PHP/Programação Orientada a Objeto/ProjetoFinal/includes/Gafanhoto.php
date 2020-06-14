<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;

    public function Gafanhoto($novoNome, $novaIdade, $novoSexo, $novoLogin){
        parent::Pessoa($novoNome, $novaIdade, $novoSexo);
        $this-> setLogin($novoLogin);
        $this-> setTotAssistido(0);
    }
    public function getLogin(){
        return $this-> login;
    }
    public function getTotAssistido(){
        return $this-> totAssistido;
    }
    public function setLogin($novoLogin){
        $this-> login = $novoLogin;
    }
    public function setTotAssistido($novoTotAssistido){
        $this-> totAssistido += $novoTotAssistido;
    }

    public function viuMaisUm(){
        $this-> setTotAssistido(1);
    }
}
?>