<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function Aluno($novoNome, $novaIdade, $novoSexo, $novoCurso){
        $this-> setNome($novoNome);
        $this-> setIdade($novaIdade);
        $this-> setSexo($novoSexo);
        $this-> setMatricula(rand(1000, 9999));
        $this-> setCurso($novoCurso);
    }
    public function getMatricula(){
        return $this-> matricula;
    }
    public function getCurso(){
        return $this-> curso;
    }
    public function setMatricula($novaMatricula){
        $this-> matricula = $novaMatricula;
    }
    public function setCurso($novoCurso){
        $this-> curso = $novoCurso;
    }

    public function cancelarMatricula(){
        echo "<p>Sua matrícula foi cancelada!</p>";
        $this-> setMatricula(0);
    }
    public function pagarMensalidade(){
        echo "<p>Pagando a mensalidade do aluno {$this-> getNome()}</p>";
    }
}
?>