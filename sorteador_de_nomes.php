<?php

$nomes = [];


do{
echo "Menu de opções \n";
echo "1 - Adicionar nome:  \n";
if( count($nomes) >=1) echo "2 - Listar nome \n";
if( count($nomes) >=2) echo "3 - Sortear nome \n";
echo "4 - Sair \n";

$opcao = readline("Digite a opção escolhida: ");
echo "\n\n";


switch($opcao){
    case 1:
        $nomes[] = readline("Digite um nome");
        echo "\n\n";
        break;
    case 2:

        if( count($nomes) >=1){

        echo "Nomes da Lista: \n";
        foreach($nomes as $nome){
            echo "- ". $nome;
            echo "\n\n";
        };
};
        
        break;
    case 3:
        if( count($nomes) >=2){
        
        $indice = array_rand($nomes);
        echo "Nome sorteado: ". $nomes[$indice];
        echo "\n\n";
        unset($nomes[$indice]);
};
        break;

}

}while($opcao != 4);



?>