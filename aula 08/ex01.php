<?php
	$produtoA = 200;
	$produtoB = 100;

	$descontoA = $produtoA - ($produtoA*0.08);
	$descontoB =  $produtoB - ($produtoB*0.11);
	
	$valorFinal = $descontoA + $descontoB;
	
	echo "O valor da sua compra foi de: R$", $valorFinal;
?>