<?php

$peso = 80;
$altura = 1.80;

$resultado = $peso / ($altura * $altura);

echo "peso = $peso";
echo "<br>";
echo "altura = $altura";
echo "<br>";
echo "imc = $resultado";
echo "<br>";

if ($resultado >= 19 && $resultado < 25) {
    echo "peso ideal";
}
elseif ($resultado >= 25 && $resultado < 30) {
    echo "sobrepeso";
}
elseif ($resultado >= 30 && $resultado < 35) {
    echo "obesidade grau 1";
}
elseif ($resultado >= 35 && $resultado < 40) {
    echo "obesidade grau 2";
}
elseif ($resultado >= 40) {
    echo "obesidade grau 3";
}
else {
    echo "abaixo do peso ideal";
}

?>
