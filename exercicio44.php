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
Descritivo: 44. Função: Escreva uma função calcularAreaRetangulo que receba a
            largura e a altura e retorne a área.
*******************************************************************************/

/*
Explicação do código:
A área de um retângulo é largura x altura. A função calcularAreaRetangulo()
recebe esses dois valores como parâmetros, multiplica-os e retorna o
resultado. No programa principal, definimos valores de exemplo, chamamos a
função e exibimos a área calculada.
*/

function calcularAreaRetangulo($largura, $altura)
{
    return $largura * $altura;
}

$largura = 5;
$altura = 3.5;

$area = calcularAreaRetangulo($largura, $altura);

echo "Retângulo de largura $largura e altura $altura" . PHP_EOL;
echo "Área: $area" . PHP_EOL;
