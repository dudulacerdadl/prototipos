<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function Livro($novoTitulo, $novoAutor, $novoTotPaginas){
        $this -> setTitulo($novoTitulo);
        $this -> setAutor($novoAutor);
        $this -> setTotPaginas($novoTotPaginas);
        $this -> aberto = false;
        $this -> pagAtual = 0;
    }
    public function getTitulo(){
        return $this -> titulo;
    }
    public function getAutor(){
        return $this -> autor;
    }
    public function getTotPaginas(){
        return $this -> totPaginas;
    }
    public function getPagAtual(){
        return $this-> pagAtual;
    }
    public function getAberto(){
        return $this -> aberto;
    }
    public function getLeitor(){
        return $this -> leitor;
    }
    public function setTitulo($novoTitulo){
        $this -> titulo = $novoTitulo;
    }
    public function setAutor($novoAutor){
        $this -> autor = $novoAutor;
    }
    public function setTotPaginas($novoTotPaginas){
        $this -> totPaginas = $novoTotPaginas;
    }
    public function setPagAtual($novaPagAtual){
        $this -> pagAtual = $novaPagAtual;
    }
    public function setAberto($novoAberto){
        $this -> aberto = $novoAberto;
    }
    public function setLeitor($novoLeitor){
        $this -> leitor = $novoLeitor;
    }

    public function detalhes(){
        print "<p>Este é o livro {$this -> getTitulo()}, do autor {$this -> getAutor()} que contém um total de {$this -> getTotPaginas()} páginas.</p>";
    }

    public function abrir(){
        if ($this -> getAberto() == false){
            $this -> setAberto(true);
        } else {
            print "<p>Você não pode abrir algo que já está aberto</p>";
        }
    }
    public function fechar(){
        if ($this -> getAberto() == true){
            $this -> setAberto(false);
        } else {
            print "<p>Você não pode fachar algo que já está fechado</p>";
        }
    }
    public function folhear(){
        if ($this -> getAberto()){
            $this -> setPagAtual(round(1, $this -> getTotPaginas()));
            print "É um livro bem legal, que tal você ler ao em vez de só folhear?";
        } else {
            print "Você se quer abrir o livro e já quer folhear ele?";
        }
    }
    public function avancarPag(){
        if ($this -> getAberto()){
            $this -> setPagAtual($this -> getPagAtual() + 1);
        }
    }
    public function voltarPag(){
        if ($this -> getAberto()){
            $this -> setPagAtual($this -> getPagAtual() - 1);
        }
    }
}
?>