<?php

function mostrarDados($nome, $idade, $cidade) {
    echo "----- Dados Pessoais -----<br>";
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . " anos<br>";
    echo "Cidade: " . $cidade . "<br>";
}

mostrarDados("João", 20, "Curitiba");

?>