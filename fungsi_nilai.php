<?php
function hitungUmur($thn_lahir,$thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur Saya adalah ". hitungUmur(1992,2019) ." tahun";
?>