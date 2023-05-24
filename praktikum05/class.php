<?php
//buat class
class bmipasien
{
    //tulis properti/variable dan metode
    public $nama, $berat_badan, $tinggi_badan, $umur, $jenis_k;

    //bikin construct
    public function __construct($nama, $berat_badan, $tinggi_badan, $umur, $jenis_k)
    {
        $this->nama         = $nama;
        $this->berat_badan  = $berat_badan;
        $this->tinggi_badan = $tinggi_badan;
        $this->umur         = $umur;
        $this->jenis_k      = $jenis_k;
    }

    public function hasilBMI()
    {
        $tinggi_m = $this->tinggi_badan / 100;
        $bmi = $this->berat_badan / ($tinggi_m * $tinggi_m);
        return $bmi;
    }

    public function statuslBMI()
    {
        $bmi = $this->hasilBMI();

        if ($bmi < 18.5) {
            return "Kekurangan Berat Badan";
        } elseif ($bmi >= 18.5) {
            return "Normal";
        } elseif ($bmi >= 25) {
            return "Kelebihan Berat badan";
        } else {
            return "Obesitas";
        }
    }
}

//buat objek baru
// $pasien = new bmipasien("Surya", "47", "161", "21", "L");

// Hasil
// echo $pasien->nama . "<br>";
// echo $pasien->berat_badan . "<br>";
// echo $pasien->tinggi_badan . "<br>";
// echo $pasien->hasilBMI() . "<br>";
// echo $pasien->statuslBMI() . "<br>";
