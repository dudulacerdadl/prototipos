<?php
require_once 'Aluno.php';
class Tecnico extends Aluno{
    private $registroProfissional;

    public function getRegistroProfissional(){
        return $this-> registroProfissional;
    }
    public function setRegistroProfissional($novoRegistroProfissional){
        $this-> registroProfissional = $novoRegistroProfissional;
    }

    public function praticar(){
        
    }
}
?>