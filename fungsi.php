<?php
function perkenalan($nama,$salam)
{
    echo $salam.",";
    echo "perkenalan nama saya ".$nama."<br />";
    echo "senang berkenalan dengan anda<br />";
}

perkenalan ("komang","hi");

echo "<hr>";

$saya ="Medi";
$ucapanSalam = "Selamat pagi";
//memanggil lagi
perkenalan($saya,$ucapanSalam);
?>