<?php
abstract class Pessoa{
    private $nome;
    private $idade;
    private $sexo;
    private $experiencia;

    public function Pessoa($novoNome, $novaIdade, $novoSexo){
        $this-> setNome($novoNome);
        $this-> setIdade($novaIdade);
        $this-> setSexo($novoSexo);
        $this-> setExperiencia(0);
    }

    public function getNome(){
        return $this-> nome;
    }
    public function getIdade(){
        return $this-> idade;
    }
    public function getSexo(){
        return $this-> sexo;
    }
    public function getExperiencia(){
        return $this-> experiencia;
    }
    protected function setNome($novoNome){
        $this-> nome = $novoNome;
    }
    protected function setIdade($novaIdade){
        $this-> idade = $novaIdade;
    }
    protected function setSexo($novoSexo){
        $this-> sexo = $novoSexo;
    }
    protected function setExperiencia($novaExperiencia){
        $this-> experiencia = $novaExperiencia;
    }
    
    protected function ganharExp($novaExp){
        $this-> setExperiencia($this-> getExperiencia() + $novaExp);
    }
}
?>