<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero{
    public function emitirSom(){
        echo "</br><p>Latindo...</p>";
    }
    public function enterrarOsso(){
        echo "</br><p>Roendo o osso</p>";
    }
    public function abanarRabo(){
        echo "</br><p>Abannando o rabo...</p>";
    }
}
?>