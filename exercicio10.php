<?php
/*
 * Curso: Engenharia de Software
 * Disciplina: Linguagem e Técnicas de Programação
 * Professor: Flores
 * Turma: ESOFT-2
 *
 * Componentes:
 * 26014883-2 - Arthur Martins Inacio
 * 26004871-2 - Derick Narresi
 * 26013191-2 - Giovanna Yoko Figueredo Durigan Nakai
 * 26009755-2 - Guilherme Massaro De Souza
 * 26008921-2 - Guivensley Guillaume
 * 26013021-2 - Joao Victor Vargas de Oliveira
 * 26007287-2 - Yago De Souza Rodrigues
 * 26014129-2 - Thiago das Neves Fernandes
 * 26013017-2 - Matheus Rodrigues Oliveira
 *
 * Data: 03 de novembro de 2026
 * Descritivo: Conta quantos dígitos possui um número inteiro.
 */

$numero = (int) readline("Digite um número inteiro: ");
$numero = abs($numero);
$contador = 0;

if ($numero == 0) {
    $contador = 1;
} else {
    while ($numero > 0) {
        $numero = (int) ($numero / 10);
        $contador++;
    }
}

echo "Quantidade de dígitos: " . $contador . "\n";
?>