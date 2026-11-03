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
Data: 03 de Novembro de 2026
Descritivo: 45. Função com Array: Crie uma função obterPrimeiroElemento que
            receba um array e retorne seu primeiro elemento.
*******************************************************************************/

/*
Explicação do código:
A função obterPrimeiroElemento() recebe um array e retorna o primeiro
elemento. Primeiro verificamos se o array está vazio com empty(); se estiver,
retornamos null para evitar erro. Caso contrário, usamos array_key_first()
para descobrir a primeira chave e acessamos o valor correspondente. Assim a
função funciona tanto para arrays comuns quanto para associativos.
O programa principal testa a função com um array de frutas e com um array
vazio.
*/

function obterPrimeiroElemento($array)
{
    if (empty($array)) {
        return null;
    }

    $primeiraChave = array_key_first($array);
    return $array[$primeiraChave];
}

$frutas = ["Maçã", "Banana", "Laranja", "Uva"];
$vazio = [];

$primeira = obterPrimeiroElemento($frutas);
echo "Primeiro elemento do array de frutas: $primeira" . PHP_EOL;

$resultadoVazio = obterPrimeiroElemento($vazio);
if ($resultadoVazio === null) {
    echo "O array vazio não possui elementos." . PHP_EOL;
}
