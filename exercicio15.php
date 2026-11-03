<?php
 // Curso: Engenharia de Software
 // Disciplina: Linguagem e Técnicas de Programação 
// Professor: Flores
// Turma: ESOFT-2
// Componentes: 
// 26014883-2 - Arthur Martins Inacio
// 26004871-2 - Derick Narresi
// 26013191-2 - Giovanna Yoko Figueredo Durigan Nakai
// 26009755-2 - Guilherme Massaro De Souza
// 26008921-2 - Guivensley Guillaume
// 26013021-2 - João Victor Vargas de Oliveira 
// 26007287-2 - Yago De Souza Rodrigues
// 26014129-2 - Thiago das Neves Fernandes
// 26013017-2 - Matheus Rodrigues Oliveira 
// Data: 03 de Novembro de 2026
// Descritivo: FOR/IF: Crie um programa para encontrar e imprimir todos os números primos entre 1 e 50

for ($numero = 2; $numero <= 50; $numero++) {

    $primo = true;

    for ($i = 2; $i < $numero; $i++) {

        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
    }

    if ($primo == true) {
        echo $numero . " ";
    }
}

?>