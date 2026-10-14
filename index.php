<?php 

const NOME_CINEMA = "Cinema do Wagner";


echo "=== . NOME_CINEMA . === \n";
echo "1 - Sessão 2D  ........ R$ 30 \n";
echo "2 - Sessão 3D  ........ R$ 45 \n";
echo "3 - Sessão IMAX  ........ R$ 70 \n";

$sessao = (int) readline("Digite qual sessão você deseja: ");

switch ($sessao) {
    case 1:
        $sessao = "2D";
        $preco = 30.0;
        break;
    case 2:
        $sessao = "3D";
        $preco = 45.0;
        break;
    case 3: 
        $sessao = "IMAX";
        $preco = 70.0;
        break;
    default:
        echo "Opção inválida!";
        break;

$nome = readline("Digite seu nome: ");
$idade = readline("Digite sua idade: ");
$qntd = readline("Quantos ingressos você deseja? ");



    

    


    
}







