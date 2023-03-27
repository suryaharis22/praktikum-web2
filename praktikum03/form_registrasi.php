<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        /* Styling for Form Pendaftaran */
        .container {
            margin-top: 50px;
            max-width: 600px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }

        h3 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .custom-select {
            height: 40px;
        }

        /* .custom-checkbox .custom-control-label::before,
        .custom-radio .custom-control-label::before {
            border-radius: 50%;
        } */

        /* .custom-checkbox .custom-control-input:checked~.custom-control-label::before,
        .custom-radio .custom-control-input:checked~.custom-control-label::before {
            background-color: #007bff;
            border-color: #007bff;
        } */

        .custom-control-label {
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Form Pendaftaran</h3>
        <hr>
        <form method="POST" action="form_registrasi.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" placeholder="Nim Anda" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki">
                        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan">
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="prodi" name="prodi" class="custom-select">
                        <option value="Sistem-Informasi">SI</option>
                        <option value="Teknik-Informatika">TI</option>
                        <option value="Bisnis-Digital">BD</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web & Programming</label>
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="HTML">
                        <label for="skill[]_0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="CSS">
                        <label for="skill[]_1" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="Javascript">
                        <label for="skill[]_2" class="custom-control-label">Javascript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="Bootstrap">
                        <label for="skill[]_3" class="custom-control-label">Bootstrap</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="PHP">
                        <label for="skill[]_4" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="Python">
                        <label for="skill[]_5" class="custom-control-label">Python</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="Java">
                        <label for="skill[]_6" class="custom-control-label">Java</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Domisili</label>
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select">
                        <option value="Jakarta">Jakarta</option>
                        <option value="Depok">Depok</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Tangerang">Tangerang</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" placeholder="Email Anda" type="email" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <hr>
        <h3>Proses Hasil Pendaftaran</h3>
        <hr>
        <?php

        if (isset($_POST['submit'])) {

            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $prodi = $_POST['prodi'];
            $skill = $_POST['skill'];
            $domisili = $_POST['domisili'];
            //Buat Skor
            $skor = 0;
            $predikat = "";
            $email = $_POST['email'];


            foreach ($skill as $s) {
                switch ($s) {
                    case 'HTML':
                        $skor += 10;
                        break;
                    case 'CSS':
                        $skor += 10;
                        break;
                    case 'Javascript':
                        $skor += 20;
                        break;
                    case 'Bootstrap':
                        $skor += 20;
                        break;
                    case 'PHP':
                        $skor += 30;
                        break;
                    case 'Python':
                        $skor += 30;
                        break;
                    case 'Java':
                        $skor += 50;
                        break;

                    default:
                        $skor = 0;
                        break;
                }
            }

            if ($skor > 100 && $skor < 150) {
                $predikat =  "Sangat Baik";
            } elseif ($skor > 60 && $skor < 100) {
                $predikat =  "Baik";
            } elseif ($skor > 40 && $skor < 60) {
                $predikat =  "Kurang Baik";
            } elseif ($skor = 0 && $skor < 40) {
                $predikat =  "Kurang";
            } elseif ($skor = 0) {
                $predikat =  "Tidak Memadai";
            } else {
                $predikat =  "Tidak Terdaftar";
            }
        }
        echo "NIM : " . $nim;
        echo "<br>Nama Lengkap : " . $nama;
        echo "<br>Jenis Kelamin : " . $jk;
        echo "<br>Program Studi : " . $nama;
        echo "<br>Skill Web & Programming : ";
        foreach ($skill as $s) {
            echo $s . " ,";
        }
        echo "<br>Domisili : " . $domisili;
        echo "<br>Skor Anda : " . $skor;
        echo "<br>Kategori Skor : " . $predikat;
        echo "<br>Email : " . $email;

        ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>