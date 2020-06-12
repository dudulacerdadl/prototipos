<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
    private $especialidade;
    private $salario;

    public function Professor($novoNome, $novaIdade, $novoSexo){
        $this-> setNome($novoNome);
        $this-> setIdade($novaIdade);
        $this-> setSexo($novoSexo);
    }
    public function getEspecialidade(){
        return $this-> especialidade;
    }
    public function getSalario(){
        return $this-> salario;
    }
    public function setEspecialidade($novaEspecialidadde){
        $this-> especialidade = $novaEspecialidadde;
    }
    public function setSalario($novoSalario){
        $this-> salario = $novoSalario;
    }

    public function recebeAumento($aumento){
        $this-> setSalario($this-> getSalario() + $aumento);
    }
}
?>