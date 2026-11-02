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
Descritivo: Função que recebe uma string e retorna o número de vogais.
******************************************************************************/

/*
 * Como o código resolve o problema:
 * - A função contarVogais() recebe uma string.
 * - Utiliza preg_match_all() com uma expressão regular que localiza
 *   vogais minúsculas, maiúsculas e acentuadas.
 * - O modificador "i" ignora maiúsculas/minúsculas e o modificador "u"
 *   permite tratar caracteres UTF-8, como vogais acentuadas.
 * - Retorna a quantidade de ocorrências encontradas com count().
 */

function contarVogais($string)
{
    preg_match_all('/[aeiouáéíóúâêîôûãõà]/iu', $string, $matches);
    return count($matches[0]);
}

// Testes da função
$textos = ["Programação em PHP", "Engenharia de Software", "AeIoU"];

foreach ($textos as $texto) {
    echo "Texto: {$texto}" . PHP_EOL;
    echo "Quantidade de vogais: " . contarVogais($texto) . PHP_EOL;
    echo PHP_EOL;
}