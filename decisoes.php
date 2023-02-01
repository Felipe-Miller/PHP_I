<?php

$idade = 17;
$numeroDePessoas = 2;

    echo "Você só pode entrar se tiver mais do que 18 anos ou 16 anos acompanhado de um responsável." . PHP_EOL;

if ($idade  >= 18) 

    echo "Você tem $idade anos, pode entrar. ";

else if ($idade >= 16 && $numeroDePessoas >= 2) 

    echo "Você tem $idade anos, está acompanhado, então pode entrar. ";

else 

    echo "Você só tem $idade anos, não poderá entrar. " . PHP_EOL;
    echo "Adeus! ";



     
  

    

   




