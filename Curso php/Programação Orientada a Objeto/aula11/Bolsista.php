<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;

    public function Bolsista($novoNome, $novaIdade, $novoSexo, $novoCurso, $novaBolsa){
        $this-> setNome($novoNome);
        $this-> setIdade($novaIdade);
        $this-> setSexo($novoSexo);
        $this-> setMatricula(rand(1000, 9999));
        $this-> setCurso($novoCurso);
        $this-> setBolsa($novaBolsa);
    }
    public function getBolsa(){
        return $this-> bolsa;
    }
    public function setBolsa($novaBolsa){
        $this-> bolsa = $novaBolsa;
    }

    public function renovarBolsa(){
        echo "<p>Bolsa renovada!</p>";
    }
    public function pagarMensalidade(){
        echo "<p>{$this-> getNome()} é bolsista, então paga com desconto!</p>";
    }
}
?>