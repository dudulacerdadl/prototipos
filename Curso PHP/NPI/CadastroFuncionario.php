<?php
require_once 'Funcionario.php';
class CadastroFuncionario{
    private $novoNome;
    private $novoCargo;
    private $novoHorarioEntrada;
    private $novoHorarioSaida;
    private $novoHorarioAlmoco;
    private $novoTempoTrabalho;
    private $novoTempoAlmoco;
    private $novaSenha;

    public function CadastroFuncionario(string $novoNome, string $novoCargo, int $novoHorarioEntrada, int $novoHorarioSaida, int $novoHorarioAlmoco, float $novoTempoTrabalho, float $novoTempoAlmoco, string $novaSenha){
        $this-> novoNome-> setNome($novoNome);
        $this-> novoCargo-> setCargo($novoCargo);
        $this-> novoHorarioEntrada-> setHorarioEntrada($novoHorarioEntrada);
        $this-> novoHorarioSaida-> setHorarioSaida($novoHorarioSaida);
        $this-> novoHorarioAlmoco-> setHorarioAlmoco($novoHorarioAlmoco);
        $this-> novoTempoTrabalho-> setTempoTrabalho($novoTempoTrabalho);
        $this-> novoTempoAlmoco-> setTempoAlmoco($novoTempoAlmoco);
        $this-> novaSenha-> setSenha();
    }
}
?>