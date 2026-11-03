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
 Descritivo :Procedimento com Múltiplos Parâmetros: Crie um procedimento mostrarDados que receba nome, idade e cidade e os imprima de forma organizada.
 */

//Procedimento que imprime os dados e recebe informações: nome, idade e cidade:
function mostrarDados($nome, $idade, $cidade) {
    echo "----- Dados Pessoais -----<br>";
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . " anos<br>";
    echo "Cidade: " . $cidade . "<br>";
}

mostrarDados("João", 20, "Curitiba");

?>