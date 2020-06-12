<?php
require_once 'Pessoa.php';
class Visitante extends Pessoa{

    public function Visitante($novoNome, $novaIdade, $novoSexo){
        $this-> setNome($novoNome);
        $this-> setIdade($novaIdade);
        $this-> setSexo($novoSexo);
    }
}
?>