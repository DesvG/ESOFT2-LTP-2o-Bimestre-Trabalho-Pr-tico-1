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
Descritivo: Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto. */
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$produtos = [
    ["nome" => "Teclado Mecânico", "preço" => 250.00],
    ["nome" => "Mouse Gamer", "preço" => 120.50],
    ["nome" => "Monitor Ultrawide", "preço" => 1200.00]
];
foreach ($produtos as $produto) {
    foreach ($produto as $chave => $valor) {
        echo ucfirst($chave) . ": " . $valor . "\n";
        echo "-------------------\n";
    }
}

// Utiliza um loop externo associado a extrações diretas por chave para exibir detalhadamente nome e preço de cada item.
?>
