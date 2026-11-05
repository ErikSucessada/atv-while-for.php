<?php

$num = [5, 10, 15, 20, 25];
$soma = 0;

for($i = 0; $i < count($num) ; $i ++ ){

    $soma += $num[$i];

}

echo "A soma dos elementos dá: $soma";

?>