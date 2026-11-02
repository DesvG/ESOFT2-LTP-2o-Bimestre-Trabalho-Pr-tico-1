<?php
/******************************************************************************
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
Descritivo: Função que recebe um número e retorna true se ele for primo e false caso contrário.
******************************************************************************/

/*
 * Como o código resolve o problema:
 * - A função ehPrimo() recebe um número inteiro.
 * - Números menores que 2 não são primos, então retorna false.
 * - O laço FOR testa divisores de 2 até a raiz quadrada do número
 *   (condição $i * $i <= $numero). Se encontrar algum divisor exato,
 *   o número não é primo e retorna false.
 * - Se o laço terminar sem encontrar divisores, retorna true.
 */

function ehPrimo($numero)
{
    if ($numero < 2) {
        return false;
    }

    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

// Testes da função
$numeros = [1, 2, 3, 4, 5, 17, 20, 29];

foreach ($numeros as $n) {
    if (ehPrimo($n)) {
        echo "{$n} é primo." . PHP_EOL;
    } else {
        echo "{$n} não é primo." . PHP_EOL;
    }
}