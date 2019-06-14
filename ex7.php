<?php
function meses ($numeromes)
    {
        if ($numeromes==1)
            {print "O mês de número $numeromes é: Janeiro\n";}
        if ($numeromes==2)
            {print "O mês de número $numeromes é: Fevereiro\n";}
        if ($numeromes==3)
            {print "O mês de número $numeromes é: Março\n";}
        if ($numeromes==4)
            {print "O mês de número $numeromes é: Abril\n";}
        if ($numeromes==5)
            {print "O mês de número $numeromes é: Maio\n";}
        if ($numeromes==6)
            {print "O mês de número $numeromes é: Junho\n";}
        if ($numeromes==7)
            {print "O mês de número $numeromes é: Julho\n";}
        if ($numeromes==8)
            {print "O mês de número $numeromes é: Agosto\n";}
        if ($numeromes==9)
            {print "O mês de número $numeromes é: Setembro\n";}
        if ($numeromes==10)
            {print "O mês de número $numeromes é: Outubro\n";}
        if ($numeromes==11)  
            {print "O mês de número $numeromes é: Novembro\n";}
        if ($numeromes==12)
            {print "O mês de número $numeromes é: Dezembro\n";}
        if ($numeromes<1 or $numeromes>12)
            {print "O ano não possui mês $numeromes\n";}
}
print "Digite o número do mês: ";
$numeromes= (int) fgets(STDIN);
meses ($numeromes);
