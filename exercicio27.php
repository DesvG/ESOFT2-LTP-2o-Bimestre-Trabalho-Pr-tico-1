
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
    Descritivo: Crie um array associativo com as notas de um aluno
    em 4 disciplinas e calcule a média.
*/

$notas = [
    "Matemática" => 8,
    "Português" => 7,
    "História" => 9,
    "Geografia" => 6
];

$soma = array_sum($notas);

$media = $soma / count($notas);

echo "A média do aluno é: " . $media;

/*
    O programa calcula a média final do aluno considerando as notas
    de quatro disciplinas e apresenta o resultado na tela.
*/
?>
