<?php

    $Primeiro_valor = 7;
    $Segundo_valor = 22; 

    if($Segundo_valor < $Primeiro_valor) {
        for($cont = $Primeiro_valor; $cont >= $Segundo_valor; $cont--) {
            echo $cont, "<br>";
        }
    }else {
        for($cont = $Segundo_valor; $cont >= $Primeiro_valor; $cont--) {
            echo $cont, "<br>";
        }
    }

 ?>