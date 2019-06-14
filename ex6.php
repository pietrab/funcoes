<?php
function intervalo ($n1, $n2){
       if ($n1>$n2){
                for ($i=$n1; $i>=$n2; $i--)
                    {$intervalo+= $i;}
                     print "A soma dos números no intervalo de $n1, até o $n2, foi de: $intervalo";
            }

        elseif  ($n1<$n2){
                for ($i=$n1; $i<=$n2; $i++){
                    $intervalo+= $i;}
                     print "A soma dos números no intervalo de $n1 até $n2 foi de $intervalo \n";
            }
                
        elseif ($n1==$n2){
            print "Os números são iguais";}    
    }

print "Digite o primeiro número: ";
$n1= (int) fgets(STDIN);

print "Digite o segundo número: ";
$n2= (int) fgets(STDIN);

intervalo ($n1, $n2);
