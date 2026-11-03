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
Descritivo: Elabore um procedimento verificarParImpar que receba um número e imprima se ele é "Par" ou "Ímpar".
*/


// Cria o procedimento que recebe um número
function verificarParImpar($numero) {

    // Verifica se o resto da divisão por 2 é zero
    if ($numero % 2 == 0) {
        echo "O número é Par!";
    } else {
        echo "O número é Ímpar!";
    }
}

// Chama o procedimento
verificarParImpar(2);

// Programa para verificar se um numero é par ou é impar 
?>