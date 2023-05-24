<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Hello, world!</h1>

    <div class="cotainer">

        <!-- Optional JavaScript; choose one of the two! -->
        <form action="form.php" method="POST">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="berat_badan" class="col-4 col-form-label">Berad Badan</label>
                <div class="col-8">
                    <input id="berat_badan" name="berat_badan" type="number" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="tinggi_badan" class="col-4 col-form-label">Tinggi Badan</label>
                <div class="col-8">
                    <input id="tinggi_badan" name="tinggi_badan" type="number" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-4 col-form-label">Umur</label>
                <div class="col-8">
                    <input id="umur" name="umur" type="number" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="jenis_k" id="jenis_k_0" type="checkbox" class="custom-control-input" value="laki-laki">
                        <label for="jenis_k_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="jenis_k" id="jenis_k_1" type="checkbox" class="custom-control-input" value="perempuan">
                        <label for="jenis_k_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </div>

    <?php

    if (isset($_POST['submit'])) {
        //panggil class dari file class.php
        require_once "class.php";

        //get data dari Form
        $nama = $_POST["nama"];
        $berat_badan = $_POST["berat_badan"];
        $tinggi_badan = $_POST["tinggi_badan"];
        $umur = $_POST["umur"];
        $jenis_k = $_POST["jenis_k"];

        $pasien = new bmipasien($nama, $berat_badan, $tinggi_badan, $jenis_k, $umur);

        echo "Nama          :" . $pasien->nama . "<br>";
        echo "Berat         :" . $pasien->berat_badan . "<br>";
        echo "Tinggi        :" . $pasien->tinggi_badan . "<br>";
        echo "Jenis Kelamin :" . $pasien->jenis_k . "<br>";
        echo "Umur          :" . $pasien->umur . "<br>";
        echo "Hsil          :" . $pasien->hasilBMI() . "<br>";
        echo "Status        :" . $pasien->statuslBMI() . "<br>";
    }

    ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>