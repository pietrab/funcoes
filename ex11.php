<?php
function polegarescentimetros ($pol)
    {$cm= $pol*2.54;
    
        return $cm;}
print "Digite as polegadas para a conversão: ";
$pol= (float) fgets(STDIN);
$cm= polegarescentimetros ($pol);
if ($pol==0)
    {print "0 polegadas são 0 centímetros\n";}
if ($pol==1 or $pol==-1)
    {print "$pol polegada equivale a $cm centímetros\n ";
        if($pol==-1)
            {print "Não é possível medir valores negativos\n";}}
if ($pol>1 or $pol<-1)
    {print "$pol polegadas equivalem a $cm centímetros\n";
        if($pol<-1)
            {print "Não é possível medir valores negativos\n";}}
