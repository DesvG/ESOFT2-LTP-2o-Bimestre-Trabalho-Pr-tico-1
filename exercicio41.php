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
Descritivo: 41. Função: Crie uma função chamada somar que receba dois números
            e retorne a soma deles.
*******************************************************************************/

/*
Explicação do código:
A função somar() recebe dois parâmetros ($a e $b), calcula a soma com o
operador + e devolve o resultado usando return. Fora da função, chamamos
somar() com dois valores de teste, guardamos o retorno em uma variável e
imprimimos na tela. Isso mostra a diferença de uma função com retorno: quem
chama decide o que fazer com o valor (aqui, exibir).
*/

function somar($a, $b)
{
    return $a + $b;
}

$numero1 = 8;
$numero2 = 12;

$resultado = somar($numero1, $numero2);

echo "A soma de $numero1 e $numero2 é: $resultado" . PHP_EOL;
