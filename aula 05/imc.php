<?php 
   
   echo "IMC - CÁLCULO (PHP)"; 
   echo "<br/>";

    $altura = 1.90;
    $peso = 120;
    
    $imc = $peso / ($altura ** 2);
 

    if( $imc < 18.5 ) {
        echo "<br/>";
        echo $imc, " Magreza ";
    } elseif ($imc >= 18.5 && $imc < 25){
        echo "<br/>";
        echo $imc, " Classificação: Normal ";
    }elseif ($imc >= 25 && $imc < 30){
        echo "<br/>";
        echo $imc, " Classificação: Obesidade, Grau: I ";
    }elseif ($imc >= 25 && $imc < 40){
        echo "<br/>";
        echo $imc, " Classificação: Obesidade, Grau: II ";
    }elseif ($imc >=40){
        echo "<br/>";
        echo $imc, " Classificação: Obesidade Grave, Grau: III ";
    }
    

?>