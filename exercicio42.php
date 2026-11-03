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
Descritivo: 42. Função: Crie uma função maiorNumero que receba dois números e
            retorne o maior entre eles.
*******************************************************************************/

/*
Explicação do código:
A função maiorNumero() recebe dois números e usa uma estrutura if/else para
compará-los. Se o primeiro for maior que o segundo, ele é retornado; caso
contrário, retorna o segundo (que também cobre o caso de números iguais, já
que o valor é o mesmo). O resultado é guardado em uma variável e exibido.
*/

function maiorNumero($a, $b)
{
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$numero1 = 15;
$numero2 = 27;

$maior = maiorNumero($numero1, $numero2);

echo "O maior entre $numero1 e $numero2 é: $maior" . PHP_EOL;
