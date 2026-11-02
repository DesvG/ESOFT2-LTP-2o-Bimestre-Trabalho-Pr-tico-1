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
Descritivo: Função que recebe um número e retorna o seu fatorial.
******************************************************************************/

/*
 * Como o código resolve o problema:
 * - A função fatorial() recebe um número inteiro.
 * - Se o número for negativo, lança uma exceção, pois fatorial não é
 *   definido para negativos.
 * - O resultado começa em 1 (caso do fatorial de 0).
 * - Um laço FOR multiplica o resultado pelos números de 2 até o valor
 *   recebido, acumulando o produto.
 * - Ao final, retorna o fatorial calculado.
 */

function fatorial($numero)
{
    if ($numero < 0) {
        throw new InvalidArgumentException("Não existe fatorial de número negativo.");
    }

    $resultado = 1;

    for ($i = 2; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}

// Testes da função
$valores = [0, 1, 5, 6, 10];

foreach ($valores as $valor) {
    echo "Fatorial de {$valor}: " . fatorial($valor) . PHP_EOL;
}