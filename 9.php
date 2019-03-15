<?php

    print"Qual o valor a ser pintado em m² ? \n";
    $metros = fgets(STDIN);



    $litros = $metros/6;
    $latas = ceil(($litros/18) *1.10);
    $galoes = ceil(($litros/3.6) *1.10);
    $comprarlatas = 80 * $latas;
    $comprargaloes = 25 * $galoes;
    $melhor_compralata = ceil($litros/18);
    $melhor_compragalao = ceil(($litros %18) /3.6);
    $melhor_mix = ($melhor_compralata *80) + ceil($melhor_compragalao *25);

    print"Compra de latas: $latas Latas: Preço $comprarlatas reais \n";
    print"Compra de galoes: $galoes Galões: Preço $comprargaloes reais \n";
    print"Mix de tintas : \n Latas: $melhor_compralata Galões: $melhor_compragalao - PREÇO : $melhor_mix";
