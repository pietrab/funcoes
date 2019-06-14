<?php
function divisivel ($x, $y)
    {
        if ($x%$y==0)
            {print "1 -\n$x é divisível por $y\n";}
        if ($x%$y!=0)
            {print "0 -\n$x não é divisível por $y\n";}
    }
print "Digite o número 1(x): ";
$x= (int) fgets(STDIN);
print "Digite o número 2(y): ";
$y= (int) fgets(STDIN);
divisivel ($x, $y);
