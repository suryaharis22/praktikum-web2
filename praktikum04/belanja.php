<!-- Main Sidebar Container -->
<?php require_once 'header.php' ?>
<?php require_once 'sidebar.php' ?>
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
                                <div class="col-md-8">
                                    <form method="POST" action="total_belanja.php">
                                        <div class="form-group row">
                                            <label for="customer" class="col-4 col-form-label">Customer</label>
                                            <div class="col-8">
                                                <input id="customer" name="customer" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-4">Pilih Produk</label>
                                            <div class="col-8">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                                                    <label for="produk_0" class="custom-control-label">TV</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                                                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                                                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jumla" class="col-4 col-form-label">Jumlah</label>
                                            <div class="col-8">
                                                <input id="jumla" name="jumla" type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-4 col-8">
                                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action active">Home</a>
                                        <div class="list-group-item">
                                            List header
                                        </div>
                                        <div class="list-group-item">
                                            <h4 class="list-group-item-heading">
                                                List group item heading
                                            </h4>
                                            <p class="list-group-item-text">
                                                ...
                                            </p>
                                        </div>
                                        <div class="list-group-item justify-content-between">
                                            Help <span class="badge badge-secondary badge-pill">14</span>
                                        </div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Home <span class="badge badge-light badge-pill">14</span></a>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <table>
                                        <tr>
                                            <td>Nama Customer</td>
                                            <td>: </td>
                                        </tr>
                                        <tr>
                                            <td>Produk</td>
                                            <td>: </td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah</td>
                                            <td>: </td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>: </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
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