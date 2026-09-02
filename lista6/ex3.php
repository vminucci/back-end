<?php

echo "Caixa eletrônico - Itaú <br>";
echo "1 - Consultar saldo <br>";
echo "2 - Fazer saque <br>";
echo "3 - Fazer depósito <br>";
echo "4 - Ver extrato <br>";
echo "5 - Sair <br>";

$opcao = 4;

switch ($opcao) {
    case 1:
        echo "Seu saldo é R$ 650,81";
        break;

    case 2:
        echo "Qual valor deseja sacar?";
        break;

    case 3:
        echo "Qual o valor do depósito?";
        break;

    case 4:
        echo "- R$ 300,00 <br>";
        echo "- R$ 50,00 <br>";
        echo "+ R$ 200,00";
        break;

    case 5:
        echo "Saindo...";
        break;

    default:
        echo "Opção inválida!";
        break;
}

?>