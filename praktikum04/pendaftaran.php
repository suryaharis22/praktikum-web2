<!-- Main Sidebar Container -->
<?php require_once 'header.php' ?>
<?php require_once 'sidebar.php' ?>

<?php

$Domisili = array(
    "Jakarta",
    "Bekasi",
    "Depok",
    "Bogor"
);
$nim        = '';
$nama       = '';
$program    = '';
$jk         = '';
$tdm        = '';
$email      = '';
$skil       = '';

if (isset($_POST['submit'])) {
    $nim        = $_POST["nim"];
    $nama       = $_POST["nama"];
    $program    = $_POST["program"];
    $jk         = $_POST["jk"];
    $tdm        = $_POST["tdm"];
    $email      = $_POST["email"];
    $skil = $_POST["skil"];


    $checkbox_values = array(
        "HTML"          => 10,
        "CSS"           => 10,
        "JavaScript"    => 20,
        "RWD_Bootstrap" => 20,
        "PHP"           => 30,
        "Python"        => 30,
        "Java"          => 30
    );

    $subtotal = 0;

    // $skil = $_POST["skil"];

    foreach ($skil as $skl) {
        $subtotal += $checkbox_values[$skl];
    }

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
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Fixed Layout</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Layout</a></li>
                        <li class="breadcrumb-item active">Fixed Layout</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Title</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" action="pendaftaran.php">
                                        <div class="form-group row">
                                            <label for="nim" class="col-6 col-form-label">NIM</label>
                                            <div class="col-9">
                                                <input id="nim" name="nim" placeholder="NIM" type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-6 col-form-label">Nama Lengkap</label>
                                            <div class="col-9">
                                                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-6">Jenis Kelamin</label>
                                            <div class="col-9">
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
                                            <label for="program" class="col-6 col-form-label">Program Studi</label>
                                            <div class="col-9">
                                                <select name="program" class="custom-select">
                                                    <option selected>Pilih Program Studi</option>
                                                    <option value="Teknik Informatika">TI</option>
                                                    <option value="Sistem Informatika">SI</option>
                                                    <option value="Bisnis Digital">BD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-6">Skil</label>
                                            <div class="col-9">

                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="skil[]" id="skil[]_1" type="checkbox" class="custom-control-input" value="HTML">
                                                    <label for="skil[]_1" class="custom-control-label">HTML</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="skil[]" id="skil[]_2" type="checkbox" class="custom-control-input" value="CSS">
                                                    <label for="skil[]_2" class="custom-control-label">CSS</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="skil[]" id="skil[]_3" type="checkbox" class="custom-control-input" value="JavaScript">
                                                    <label for="skil[]_3" class="custom-control-label">JavaScript</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="skil[]" id="skil[]_4" type="checkbox" class="custom-control-input" value="RWD_Bootstrap">
                                                    <label for="skil[]_4" class="custom-control-label">RWD Bootstrap</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="skil[]" id="skil[]_5" type="checkbox" class="custom-control-input" value="PHP">
                                                    <label for="skil[]_5" class="custom-control-label">PHP</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="skil[]" id="skil[]_6" type="checkbox" class="custom-control-input" value="Python">
                                                    <label for="skil[]_6" class="custom-control-label">Python</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="skil[]" id="skil[]_7" type="checkbox" class="custom-control-input" value="Java">
                                                    <label for="skil[]_7" class="custom-control-label">Java</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tdm" class="col-6 col-form-label">Tempat Domisili</label>
                                            <div class="col-9">
                                                <select name="tdm" class="custom-select">
                                                    <option selected>Domisili</option>
                                                    <?php foreach ($Domisili as $dms) : ?>
                                                        <option value="<?= $dms ?>"><?= $dms ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-6 col-form-label">Email</label>
                                            <div class="col-9">
                                                <input id="email" name="email" placeholder="email Anda" type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-4 col-8">
                                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                            </div>

                        </div>
                        <div class="row">

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Hasil</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table>
                                        <tr>
                                            <th>NIM</th>
                                            <th>:<?= $nim ?></th>
                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <th>:<?= $nama ?></th>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <th>:<?= $jk ?></th>
                                        </tr>
                                        <tr>
                                            <th>Program Studi</th>
                                            <th>:<?= $program ?></th>
                                        </tr>
                                        <tr>
                                            <th>Skil</th>
                                            <th>:<?php foreach ($skil as $h) {
                                                        echo $h . " ,";
                                                    } ?>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Skor Skil</th>
                                            <th>:<?= $subtotal ?></th>
                                        </tr>
                                        <tr>
                                            <th>Kategori Skil</th>
                                            <th>:<?= $status ?></th>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <th>:<?= $email ?></th>
                                        </tr>
                                    </table>
                                </div>


                            </div>

                        </div>
                        <div class="row">

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php require_once 'footer.php' ?>