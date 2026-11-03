<?php

/*
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
 Professor: Flores
 Turma: ESOFT-2
 Componentes:
 26014883-2 - Arthur Martins Inacio 
 26004871-2 - Derick Narresi 
 26013191-2 - Giovanna Yoko Figueredo Durigan Nakai
 26009755-2 - Guilherme Massaro De Souza
 26008921-2 - Guivensley Guillaume
 26013021-2 - João Victor Vargas de Oliveira 
 26007287-2 - Yago De Souza Rodrigues
 26014129-2 - Thiago das Neves Fernandes
 26013017-2 - Matheus Rodrigues Oliveira 
 Data: 03 de Novembro  de 2026
Descritivo: Crie um procedimento imprimirArray que receba um array e imprima todos os seus elementos.
*/


// Cria o procedimento que recebe um array
function imprimirArray($array) {

    // Percorre todos os elementos do array
    foreach ($array as $elemento) {

        // Imprime cada elemento
        echo $elemento . PHP_EOL;
    }
}

// Cria um array
$numeros = [10, 20, 30, 40, 50];

// Chama o procedimento passando o array
imprimirArray($numeros);

// programa para imprimir todos os elementos de uma array

?>