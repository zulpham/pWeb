<?php
$nilai=95;
if ($nilai>85){
    echo"Nilai kamu memenuhi standar kelulusan";
}
?>
<?php
$suhu =27;
if ($suhu> 30){
    echo "Cuaca sedang panas gunakan topi";
}
else{
    echo "Cuaca sedang dingin gunakan jaket";
}
?>
<?php
$ruang= 2;
    switch ($ruang) {
        case 1:
            echo"Kamu memilih ruang 1";
            break;
        case 2:
            echo "Kamu memilih ruang 2";
            break;
        case 3:
            echo "Kamu memilih ruang 3";
            break;
        default:
            echo "Pilihlah ruangan 1-3";
    }
?>