
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

    Data: 03 de Novembro de 2026
    Descritivo: Crie um array de frutas. Escreva um código que
    verifique se a fruta "Maçã" existe no array.
*/

$frutas = ["Banana", "Maçã", "Uva", "Morango"];

if (in_array("Maçã", $frutas, true)) {
    echo "A fruta Maçã foi encontrada no array.";
} else {
    echo "A fruta Maçã não foi encontrada no array.";
}

/*
    O programa verifica se a fruta Maçã está entre as frutas do array
    e informa na tela se ela foi encontrada ou não.
*/
?>
