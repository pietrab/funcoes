<?php
function triangulo ($lado1, $lado2, $lado3)
    {$peritriangulo= $lado1+$lado2+$lado3;
     print "Triângulo\n";
     print "Perímetro do triângulo: $peritriangulo cm\n";}

function quadrado($lado1, $lado2){
     $areaquadrado= $lado1*$lado2;
     print "Quadrado\n";
     print "Área do quadrado: $areaquadrado cm\n";
    }

function pentagono ()
    {print "Pentágono \n";}

print "Digite o número de lados da figura geométrica (entre 3 e 5): ";
$lados= (int) fgets(STDIN);

if ($lados==3){
    print "Digite o lado 1: ";
    $lado1= (float) fgets(STDIN);
    print "Digite o lado 2: ";
    $lado2= (float) fgets(STDIN);
    print "Digite o lado 3: ";
    $lado3= (float) fgets(STDIN);
    triangulo($lado1, $lado2, $lado3);
}
    
if ($lados==4){
print "Digite o lado 1: ";
    $lado1= (float) fgets(STDIN);
    print "Digite o lado 2: ";
    $lado2= (float) fgets(STDIN);
    quadrado ($lado1, $lado2);
}

if ($lados==5){
    pentagono ();
}