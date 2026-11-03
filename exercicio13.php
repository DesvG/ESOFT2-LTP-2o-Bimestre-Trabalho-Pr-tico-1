<?php
 // Curso: Engenharia de Software
 // Disciplina: Linguagem e Técnicas de Programação 
// Professor: Flores
// Turma: ESOFT-2
// Componentes: 
// 26014883-2 - Arthur Martins Inacio
// 26004871-2 - Derick Narresi
// 26013191-2 - Giovanna Yoko Figueredo Durigan Nakai
// 26009755-2 - Guilherme Massaro De Souza
// 26008921-2 - Guivensley Guillaume
// 26013021-2 - João Victor Vargas de Oliveira 
// 26007287-2 - Yago De Souza Rodrigues
// 26014129-2 - Thiago das Neves Fernandes
// 26013017-2 - Matheus Rodrigues Oliveira 
// Data: 03 de Novembro de 2026
// Descritivo: .DO-WHILE: Faça um programa que solicite uma senha ao usuário. O programa só deve continuar quando a senha correta ("1234") for digitada

$senhaCorreta = "1234";

do {
    $senha = readline("Digite a senha: ");

    if ($senha != $senhaCorreta) {
        echo "Senha incorreta! Tente novamente.\n";
    }

} while ($senha != $senhaCorreta);

echo "Senha correta! Acesso permitido.\n";

?>