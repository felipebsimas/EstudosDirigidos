<?php
 
    print"Digite a distancia que irá percorrer em Km \n";
    $distancia = fgets (STDIN);
 
    print"Qual a velocidade media do carro em Km/h  \n";
    $velocidade_media = fgets (STDIN);
 
    $tempo_viagem = $distancia / $velocidade_media;
 
    print"O tempo foi de $tempo_viagem HORAS ";