<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 90;

//var_dump($nome);
//var_dump($idade);


if($idade >= 0 && $idade <=12)
{
    echo 'infatil';
}

else if($idade >= 13 && $idade <=17)
{
    echo 'adolecente';
}

else if($idade >= 18 && $idade <=59)
{
    echo 'adulto';
}

else
{
    echo 'idoso';
}