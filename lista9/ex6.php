<?php

$musicas = ["All I Need", "Creep", "Promise", "This I Love", "Seek And Destroy", "I Could Die For You"];

$qtd = count($musicas);

echo "Quantidade de Músicas: ", $qtd;
echo "<br>";

foreach($musicas as $music){
    echo "<br> $music";
}
?>