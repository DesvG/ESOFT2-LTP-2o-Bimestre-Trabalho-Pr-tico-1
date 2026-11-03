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
Descritivo: 43. Função: Elabore uma função converterParaMaiusculas que receba
            uma string e a retorne em letras maiúsculas.
*******************************************************************************/

/*
Explicação do código:
A função converterParaMaiusculas() recebe uma string e retorna o texto em
letras maiúsculas. Foi usada mb_strtoupper() em vez de strtoupper() porque
ela entende caracteres acentuados em UTF-8 (ex.: "ç" vira "Ç" e "ã" vira "Ã"),
o que é importante para textos em português. Depois, chamamos a função com
um texto de exemplo e imprimimos o original e o convertido.
*/

function converterParaMaiusculas($texto)
{
    return mb_strtoupper($texto, 'UTF-8');
}

$frase = "Programação em PHP é muito legal!";

$fraseMaiuscula = converterParaMaiusculas($frase);

echo "Original : $frase" . PHP_EOL;
echo "Maiúscula: $fraseMaiuscula" . PHP_EOL;
