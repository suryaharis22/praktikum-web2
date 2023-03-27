<?php





if (isset($_POST['submit'])) {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $program = $_POST["program"];
    $jk = $_POST["jk"];
    // $skil = $_POST["skil"];
    $ipk = $_POST["ipk"];


    // Initialize an associative array to store the checkbox values
    $checkbox_values = array(
        "HTML" => 10,
        "CSS" => 10,
        "JavaScript" => 20,
        "RWD_Bootstrap" => 20,
        "PHP" => 30,
        "Python" => 30,
        "Java" => 30,
    );


    // Initialize a subtotal variable to 0
    $subtotal = 0;

    $skil = $_POST["skil"];


    // Loop through the selected checkboxes and add up their values
    foreach ($skil as $skl) {
        $subtotal += $checkbox_values[$skl];
    }



    //Buat Fungsi Lolos Berdasarkan IPK
    function cekStatus($subtotal)
    {

        if ($subtotal >= 0 && $subtotal < 10) {
            return "Tidak Memadai";
        } elseif ($subtotal >= 10 && $subtotal < 40) {
            return "Kurang";
        } elseif ($subtotal >= 40 && $subtotal < 60) {
            return "Cukup";
        } elseif ($subtotal >= 60 && $subtotal < 100) {
            return "Baik";
        } elseif ($subtotal >= 100 && $subtotal <= 150) {
            return "Sangat Baik";
        } else {
            return "Invalid subtotal";
        }
    }

    $status = cekStatus($subtotal);

    echo "Subtotal: " . $subtotal;
    echo "NIM : " . $nim;
    echo "Nama : " . $nama;

    echo "<br>Jenis Kelamin : " . $jk;
    echo "program : " . $program;
    echo "<br>skil : ";
    foreach ($skil as $h) {
        echo $h . " ,";
    }
    echo "<br>IPK : " . $ipk;
    echo "<br>Status : " . $status;
}
