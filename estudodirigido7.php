<?php

// Escreva um programa que pergunte a quantidade de km percorridos por um carro alugado pelo usuário,
//assim como a quantidade de dias pelos quais o carro foi alugado. Calcule o preço a pagar, sabendo que o
//carro custa R$ 60,00 por dia e R$ 0,15 por km rodado.

    print"Quantos km o carro percorreu?";
    $km_percorridos = fgets (STDIN);

    print"Quantos dias ficou com o carro?";
    $dias = fgets (STDIN);

    $preço_total = ($dias * 60) + ($km_percorridos * 0.15);

    print"O total a pagar foi de $preço_total";