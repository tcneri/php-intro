<?php

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

print_r($categorias);

$nome = 'Eduardo';
$idade = 18;

if ($idade >= 6 && $idade <= 12){
    echo 'infantil';
}
elseif ($idade >=13 && $idade <=18){
    echo 'adolescente';
}
else{
    echo 'adulto';
}