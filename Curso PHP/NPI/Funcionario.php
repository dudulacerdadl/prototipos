<?php
class Funcionario{
    private string $nome;
    private string $cargo;
    private int $horarioEntrada;
    private int $horarioSaida;
    private int $horarioAlmoco;
    private float $tempoTrabalho;
    private float $tempoAlmoco;
    private string $senha;
    private bool $trabalhando;
    
    public function Funcionario(string $novoNome, string $novoCargo, int $novoHorarioEntrada, int $novoHorarioSaida, int $novoHorarioAlmoco, float $novoTempoTrabalho, float $novoTempoAlmoco, string $novaSenha){
        $this-> setNome($novoNome);
        $this-> setCargo($novoCargo);
        $this-> setHorarioEntrada($novoHorarioEntrada);
        $this-> setHorarioSaida($novoHorarioSaida);
        $this-> setHorarioAlmoco($novoHorarioAlmoco);
        $this-> setTempoTrabalho($novoTempoTrabalho);
        $this-> setTempoAlmoco($novoTempoAlmoco);
        $this-> setSenha($novaSenha);
    }
    public function getNome(){
        return $this-> nome;
    }
    public function getCargo(){
        return $this-> cargo;
    }
    public function getHorarioEntrada(){
        return $this-> horarioEntrada;
    }
    public function getHorarioSaida(){
        return $this-> horarioSaida;
    }
    public function getHorarioAlmoco(){
        return $this-> horarioAlmoco;
    }
    public function getTempoTrabalho(){
        return $this-> tempoTrabalho;
    }
    public function getTempoAlmoco(){
        return $this-> tempoAlmoco;
    }
    protected function getSenha(){
        return $this-> senha;
    }
    public function getTrabalhando(){
        return $this-> trabalhando;
    }
    public function setNome(string $novoNome){
        $this-> nome = $novoNome;
    }
    public function setCargo(string $novoCargo){
        $this-> cargo = $novoCargo;
    }
    public function setHorarioEntrada(int $novoHorarioEntrada){
        $this-> horarioEntrada = $novoHorarioEntrada;
    }
    public function setHorarioSaida(int $novoHorarioSaida){
        $this-> horarioSaida = $novoHorarioSaida;
    }
    public function setHorarioAlmoco(int $novoHorarioAlmoco){
        $this-> horarioAlmoco = $novoHorarioAlmoco;
    }
    public function setTempoTrabalho(float $novoTempoTrabalho){
        $this-> tempoTrabalho = $novoTempoTrabalho;
    }
    public function setTempoAlmoco(float $novoTempoAlmoco){
        $this-> tempoAlmoco = $novoTempoAlmoco;
    }
    protected function setSenha(string $novaSenha){
        $this-> senha = $novaSenha;
    }
    public function setTrabalhando(){
        if($this-> trabalhando == true){
            $this-> trabalhando = false;
        } else {
            $this-> trabalhando = true;
        }
    }

    public function BaterPonto(){
        
    }
}
?>