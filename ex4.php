<?php
function pesoideal ($sexo, $altura){
    if ($sexo==1){
        $pesoideal= (62.1*$altura)-44.7;
             print "O seu peso ideal é de: $pesoideal Kg\n";}
    elseif ($sexo==2){
        $pesoideal= (72.7*$altura)-58;
             print "O seu peso ideal é de: $pesoideal Kg\n";}
            }

print "Digite 1 para sexo feminino e 2 para sexo masculino: ";

$sexo= (int) fgets(STDIN);

print "Digite a sua altura em cm: ";
$altura= (int) fgets(STDIN);
$altura= $altura/100;

print pesoideal($sexo,$altura);