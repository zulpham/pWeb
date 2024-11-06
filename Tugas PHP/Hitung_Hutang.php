<?php
    $pemasukan = 50000000;
    $hutanga=16500000;
    $hutangb= 9500000;

    echo"SISA UANG SEBESAR: Rp "($pemasukan-(($hutanga*1.05)+($hutangb*1.045)));
    echo "TOTAL BUNGA HUTANG: Rp "(($hutanga*0.05)+($hutangb*0.045));
    echo "TOTAL HUTANG SEBESAR: Rp"($hutanga+$hutangb);
?>