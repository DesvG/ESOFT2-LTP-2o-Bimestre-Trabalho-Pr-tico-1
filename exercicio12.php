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
 * Descritivo: Exibe um menu até o usuário escolher a opção Sair.
 */

do {
    echo "\n1. Iniciar\n";
    echo "2. Parar\n";
    echo "3. Sair\n";

    $opcao = (int) readline("Escolha uma opção: ");

    if ($opcao == 1) {
        echo "Iniciando...\n";
    } elseif ($opcao == 2) {
        echo "Parando...\n";
    } elseif ($opcao == 3) {
        echo "Saindo do programa...\n";
    } else {
        echo "Opção inválida!\n";
    }

} while ($opcao != 3);
?>