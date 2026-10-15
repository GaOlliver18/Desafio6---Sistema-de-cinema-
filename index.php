<?php 

const NOME_CINEMA = "Cinema do Wagner";


echo "=== " . NOME_CINEMA . " === \n";
echo "1 - Sessão 2D  ........ R$ 30 \n";
echo "2 - Sessão 3D  ........ R$ 45 \n";
echo "3 - Sessão IMAX  ........ R$ 70 \n";
echo "0 - Sair \n";

$sessao = (int) readline("Digite qual sessão você deseja: ");

switch ($sessao) {
     case 0:
        $sessao = "Sair";
        echo "Saindo do programa!";
        exit;
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
        exit;
}

$nome = readline("Digite seu nome: ");
$idade = (int) readline("Digite sua idade: ");
$qntd = (int) readline("Quantos ingressos você deseja? ");

if ($idade < 0) {
    echo "Idade inválida \n";
    exit;
} elseif ($qntd < 1) {
    echo "Quantidade inválida!\n";
    exit;
}

if ($idade >= 0 && $idade <= 9){
    $categoria = "Classificação livre";
} elseif ($idade >= 10 && $idade <= 11){
    $categoria = "Classificação 10 anos";
} elseif ($idade >= 12 && $idade <= 13){
    $categoria = "Classificação 12 anos";
} elseif ($idade >= 14 && $idade <= 15){
    $categoria = "Classificação 14 anos";
} elseif ($idade >= 16 && $idade <= 17){
    $categoria = "Classificação 16 anos";
} elseif ($idade >= 18){
    $categoria = "Classificação 18 anos";
}

$calculo =  ($idade < 18 || $idade >= 60) ? 0.5 : 1.0;
$meiaEntrada = ($calculo === 0.5) ? "Sim" : "Não";
$subtotal = $preco * $qntd * $calculo;

$desconto = ($qntd >=4) ? $subtotal * 0.10 : 0.0;

$total = $subtotal - $desconto;

echo "============================ \n";
echo "Recibo - " . NOME_CINEMA . " \n";
echo "============================ \n";

echo "Cliente: $nome \n";
echo "Sessão $sessao \n";
echo "Categoria: $categoria \n";
echo "Ingressos: $qntd \n";
echo "Meia entrada: $meiaEntrada \n";
echo "Subtotal: R$ " . number_format($subtotal , 2, ',', '.') . "\n";
echo ("Desconto combo: R$ " . number_format($desconto, 2, ',', '.') . "\n");
echo ("Total a pagar: R$ " . number_format($total, 2, ',', '.') . "\n");
echo "============================ \n";

echo ($idade >= 18) ? "Bom filme" : "Aproveite com responsabilidade";






    

    


    








