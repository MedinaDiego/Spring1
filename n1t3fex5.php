<?php
$nota = 2;
verificarGrau($nota);

function verificarGrau($nota){
    switch($nota){
        case ($nota >= 60):
            echo "El grau es de Primera Divisio"; 
            break;
        case ($nota >= 45 && $nota <= 59):
            echo "El grau es de Segona Divisió";
            break;
        case ($nota >= 33 && $nota <= 44):
            echo "El grau es de Tercera Divisió";
            break;
        case ($nota >= 0 && $nota < 33):
                echo "Has reprovat";
            break;
        default:
            echo "Introduce un valor correcto";
    }
}