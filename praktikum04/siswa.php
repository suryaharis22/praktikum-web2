<!-- Main Sidebar Container -->
<?php require_once 'header.php' ?>
<?php require_once 'sidebar.php' ?>

<?php
$nilai1 = [
    "id"    => 1,
    "nim"   => "22089",
    "uts"   => 89,
    "uas"   => 80,
    "tugas"   => 90,

];
$nilai2 = [
    "id"    => 2,
    "nim"   => "24089",
    "uts"   => 78,
    "uas"   => 86,
    "tugas"   => 45

];
$nilai3 = [
    "id"    => 3,
    "nim"   => "25089",
    "uts"   => 74,
    "uas"   => 83,
    "tugas"   => 41

];

$nilai4 = [
    "id"    => 4,
    "nim"   => "15089",
    "uts"   => 73,
    "uas"   => 84,
    "tugas"   => 42

];

$kumpulannilai = [$nilai1, $nilai2, $nilai3, $nilai4];

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
                            <table class="table table-striped border">
                                <thead>
                                    <tr class="thead-dark">
                                        <th scope="col">No</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">UTS</th>
                                        <th scope="col">UAS</th>
                                        <th scope="col">Tugas</th>
                                        <th scope="col">Nilai Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kumpulannilai as $nilai) : ?>
                                        <tr>
                                            <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                                            <th scope="row"><?= $nilai["id"]; ?></th>
                                            <td><?= $nilai["nim"]; ?></td>
                                            <td><?= $nilai["uts"]; ?></td>
                                            <td><?= $nilai["uas"]; ?></td>
                                            <td><?= $nilai["tugas"]; ?></td>
                                            <td><?= number_format($nilai_akhir, 2, ",", "."); ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
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