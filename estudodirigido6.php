<?php

    print"Digite a temperatura em celsius";
    $temperatura_celsius = fgets(STDIN);

    $temperatura_fahrenheit = (9 * $temperatura_celsius) /5 + 32;

    print"A conversao de $temperatura_celsius graus celsius para fahrenheit é $temperatura_fahrenheit \n";