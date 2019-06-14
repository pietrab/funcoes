<?php

function hipotenusa ($cateto1,$cateto2)
    {$hipotenusa = sqrt(($cateto1**2)+($cateto2**2));
     return $hipotenusa;}

print "Digite o valor do primeiro cateto: ";
$cateto1 = (float) fgets(STDIN);

print "Digite o valor do segundo cateto: ";
$cateto2 = (float) fgets(STDIN);

$hipotenusa= hipotenusa($cateto1,$cateto2);
$hipotenusa= round($hipotenusa, 3);

print "O valor da hipotenusa é: $hipotenusa \n";
