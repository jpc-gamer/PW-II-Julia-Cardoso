<?php

    $valor_A = 10;
    $valor_B = 1; 

    if($valor_B > $valor_A) {
        for($cont = $valor_A; $cont <= $valor_B; $cont++) 
        {
            echo $cont, "<br>";
        }
    }else {
        for($cont = $valor_B; $cont <= $valor_A; $cont++) 
        {
            echo $cont, "<br>";
        }
    }

 ?>