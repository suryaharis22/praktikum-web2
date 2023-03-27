<?php 

//Buat Fungsi
function hitungUmur($thn_lahir){
    $thn_skrg = 2023;
    //hitung Umur
    $umur = $thn_skrg - $thn_lahir;
    //tampilin
    return $umur;
}

//Panggil Fungsi
echo hitungUmur(2001);
?>