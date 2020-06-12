<?php
class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    public function Livro($novoNome, $novaIdade, $novoSexo){
        $this -> setNome($novoNome);
        $this -> setIdade($novaIdade);
        $this -> setSexo($novoSexo);
    }

    public function getNome(){
        return $this -> nome;
    }
    public function getIdade(){
        return $this -> idade;
    }
    public function getSexo(){
        return $this -> sexo;
    }
    public function setNome($novoNome){
        $this -> nome = $novoNome;
    }
    public function setIdade($novaIdade){
        $this -> idade = $novaIdade;
    }
    public function setSexo($novoSexo){
        $this -> sexo = $novoSexo;
    }

    public function fazerAniversario(){
        print "<p>Feliz Aniversário!</p>";
        $this -> setIdade($this -> getIdade() + 1);
    }
}
?>