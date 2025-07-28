<?php

$nomes = [];


do{
echo "Menu de opções \n";
echo "1 - Adicionar nome \n";
echo "2 - Listar nome \n";
echo "3 - Sortear nome \n";
echo "4 - Sair \n";

$opcao = readline("Digite a opção escolhida: ");
echo "\n\n";


switch($opcao){
    case 1:
        $nomes[] = readline("Digite um nome");
        echo "\n\n";
        break;
    case 2:
        echo "Nomes da Lista";
        foreach($nomes as $nome){
            echo "-". $nome;
            echo "\n\n";
        }
        break;
    case 3:
        break;

}

}while($opcao != 4);



?>