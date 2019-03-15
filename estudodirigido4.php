<?php
    print"Digite o preço da mercadoria";
    $preço_mercadoria = fgets(STDIN);
 
    print"Digite o percentual de desconto";
    $desconto = fgets (STDIN);
 
    $porcentagem = ($desconto/100);
 
    $valor_desconto = $preço_mercadoria*$porcentagem;
 
    $desconto_mercadoria = $preço_mercadoria-$valor_desconto;
 
    print"O valor do desconto foi $valor_desconto";
    print"O valor da mercadoria com o desconto foi de $desconto_mercadoria";