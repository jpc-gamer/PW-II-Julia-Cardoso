<?php 


echo "IMC - CÁLCULO (PHP)"; 
   echo "<br/>";

    $altura = 1.90;
    $peso = 50;
    
    $imc = $peso / ($altura ** 2);

    switch ($imc){
        case ($imc < 18.5 ):
            echo $imc, " Magreza ";
        break;

        case($imc >= 18.5 && $imc < 25):
            echo $imc, " Classificação: Normal ";
        break;

        case($imc >= 25 && $imc < 30):
            echo $imc, " Classificação: Obesidade, Grau: I ";
        break;

        case($imc >= 25 && $imc < 40):
            echo $imc, "  Classificação: Obesidade, Grau: II ";
        break;

        case($imc >= 40):
            echo $imc, "  Classificação: Obesidade, Grau: IIi ";
        break;

        default:
        echo " Erro ";

        
}
    
    
    

    
    
 

?>