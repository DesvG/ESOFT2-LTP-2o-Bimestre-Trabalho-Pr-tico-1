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
Descritivo: Função que recebe um número n e retorna um array com todos os números pares de 0 até n.
******************************************************************************/

/*
 * Como o código resolve o problema:
 * - A função gerarArrayPares() recebe o limite superior $n.
 * - Cria um array vazio para armazenar os pares.
 * - Um laço FOR começa em 0 e avança de 2 em 2 até chegar a $n,
 *   adicionando cada valor ao array.
 * - Retorna o array preenchido. Se $n for negativo, o laço não executa
 *   e o array retornado fica vazio.
 */

function gerarArrayPares($n)
{
    $pares = [];

    for ($i = 0; $i <= $n; $i += 2) {
        $pares[] = $i;
    }

    return $pares;
}

// Testes da função
$limite = 10;
$resultado = gerarArrayPares($limite);

echo "Números pares de 0 até {$limite}: " . implode(", ", $resultado) . PHP_EOL;