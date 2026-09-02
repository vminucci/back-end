<?php

echo "Menu Pizzaria <br>";
echo "1 - PIZZAS <br>";
echo "2 - HAMBÚRGUERS <br>";
echo "3 - REFRIGERANTES <br>";
echo "4 - SOBREMESAS <br>";
echo "5 - Sair <br>";

$opcao = 2;

switch ($opcao) {
    case 1:
        echo "PIZZAS";
        echo "<br> 1-Calabresa <br>";
        echo "2-Palmito <br>";
        echo "3-strogonoff de frango <br>";
        echo "4-strogonoff de carme <br>";
        echo "5-quatro quiejos";
        
        break;

    case 2:
        echo "HAMBÚRGUERS";
        echo "<br> 1-X-Bacon <br>";
        echo "2-X-Salada <br>";
        echo "3-X-Tudo <br>";
        echo "4-X-Cheddar <br>";
        echo "5-X-Frango";   
        break;

    case 3:
        echo "REFRIGERANTES";
        echo "<br> 1-Sprite <br>";
        echo "2-Coca-Cola <br>";
        echo "3-Guaraná <br>";
        echo "4-Pepsi <br>";
        echo "5-H2OH!";   
        break;

    case 4:
        echo "SOBREMESAS";
        echo "<br> 1-Pudim <br>";
        echo "2-Mousse de Chocolate <br>";
        echo "3-Mousse de Maracujá <br>";
        echo "4-Churros <br>";
        echo "5-Torta de Limão";  
        break;

    case 5:
        echo "Saindo...";
        break;

    default:
        echo "Opção inválida!";
        break;
}

?>