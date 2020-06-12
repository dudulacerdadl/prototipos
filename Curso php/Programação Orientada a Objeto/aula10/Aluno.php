<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    private $matr;
    private $curso;

    public function Aluno($novoNome, $novaIdade, $novoSexo, $novoCurso){
        $this-> setNome($novoNome);
        $this-> setIdade($novaIdade);
        $this-> setSexo($novoSexo);
        $this-> setMatr(rand(1000, 9999));
        $this-> setCurso($novoCurso);
    }
    public function getMatr(){
        return $this-> matr;
    }
    public function getCurso(){
        return $this-> curso;
    }
    public function setMatr($novaMatr){
        $this-> matr = $novaMatr;
    }
    public function setCurso($novoCurso){
        $this-> curso = $novoCurso;
    }

    public function cancelarMatr(){
        echo "<p>Sua matrícula foi cancelada!</p>";
        $this-> setMatr(0);
    }
}
?>