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
Descritivo: Função que recebe uma string e a retorna invertida, sem usar strrev().
******************************************************************************/

/*
 * Como o código resolve o problema:
 * - A função inverterString() recebe uma string.
 * - Obtém o tamanho da string com strlen().
 * - Um laço FOR percorre a string do último caractere até o primeiro,
 *   concatenando cada caractere em uma nova variável.
 * - Ao final, retorna a string invertida.
 * - Não utiliza a função nativa strrev(), conforme exigido no enunciado.
 */

function inverterString($string)
{
    $invertida = "";
    $tamanho = strlen($string);

    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $invertida .= $string[$i];
    }

    return $invertida;
}

// Testes da função
$textos = ["PHP", "Engenharia", "Software", "12345"];

foreach ($textos as $texto) {
    echo "Original: {$texto}" . PHP_EOL;
    echo "Invertida: " . inverterString($texto) . PHP_EOL;
    echo PHP_EOL;
}