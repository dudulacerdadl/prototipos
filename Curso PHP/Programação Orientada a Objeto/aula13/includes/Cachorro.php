<?php
require_once 'Lobo.php';
class Cachorro extends Lobo{
    public function emitirSom(){
        echo "</br><p>Au! Au! Au!</p>";
    }
    public function reagirFrase(string $frase){
        if ($frase == "Toma comida" || $frase == "Olá"){
            echo "<br/><p>Abanar e Latir</p>";
        } else {
            echo "<br/><p>Rosnar</p>";
        }
    }
    public function reagirHora(int $hora, $min){
        if ($hora < 12){
            echo "<br/><p>Abanar</p>";
        } elseif ($hora >= 18){
            echo "<br/><p>Ignorar</p>";
        } else {
            echo "<br/><p>Abanar e Latir</p>";
        }
    }
    public function reagirDono(bool $dono){
        if ($dono == true){
            echo "<br/><p>Abanar</p>";
        } else {
            echo "<br/><p>Rosnar e Latir</p>";
        }
    }
    public function reagirIdade(int $idade, float $peso){
        if ($idade < 5){
            if ($peso < 10){
                echo "<br/><p>Abanar</p>";
            } else {
                echo "<br/><p>Latir</p>";
            }
        } else {
            if ($peso < 10){
                echo "<br/><p>Rosnar</p>";
            } else {
                echo "<br/><p>Ignorar</p>";
            }
        }
    }
}
?>