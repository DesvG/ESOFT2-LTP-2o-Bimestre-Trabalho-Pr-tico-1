<?php

/*
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
 Descritivo : Procedimento: Elabore um procedimento chamado calcularMediaAluno que receba duas notas e imprima a média e se o aluno foi "Aprovado" (média
>= 7) ou "Reprovado"
 */

//Procedimento que imprime o calculo da média do aluno:
function calcularMediaAluno($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;

    echo "Média do aluno: " . $media . "<br>";

    if ($media >= 7) {
        echo "Situação: Aprovado";
    } else {
        echo "Situação: Reprovado";
    }
}

// Chamando o procedimento
calcularMediaAluno(8, 6);

?>