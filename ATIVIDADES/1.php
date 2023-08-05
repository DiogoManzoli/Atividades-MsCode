<?php
$nome_completo = 'Diogo Manzoli de Oliveira';


if (str_contains($nome_completo, ' ')) {
    echo 'A variável que foi verificada contém espaços vazios';
} else {
    echo 'A variável que foi verificada NÃO contém espaço vazios';
}

//Achei essa função str_contains bem interessante!
