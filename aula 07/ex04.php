<?php

echo " Exercício 04 (PHP) "; 
   echo "<br/>";

    $produto = 10;

    $valor = $produto + ($produto * 0.16);

    echo "O valor total da compra é:  ", $valor;

    $parcela = $valor/10;

    echo "<br/> ", "O valor da parcela é:  ", $parcela;

?>