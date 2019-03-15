<?php  
 
    print"Digite o salario do usuario";
    $salario = fgets (STDIN);
 
    print"Digite a porcentagem de aumento";
    $porcentagemaumento = fgets (STDIN);
 
    $aumento = $porcentagemaumento/100;
 
    $porcentagem = $salario*$aumento;
 
    $salarionovo = $salario+$porcentagem;
 
 
 
    print"O aumento foi de $porcentagem";
    print"O novo salario do usuario é $salarionovo";
 