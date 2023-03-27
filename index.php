<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Generet Api</title>
</head>

<body>
    <h1>Generet Api</h1>
    <div class="container">
        <div class="col-md-4">
            <form method="POST" action="index.php">
                <div class="form-group row">
                    <label for="token" class="col-4 col-form-label">Token</label>
                    <div class="col-8">
                        <input id="token" name="token" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="trxdate" class="col-4 col-form-label">TRX Date</label>
                    <div class="col-8">
                        <input id="trxdate" name="trxdate" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="msisdn" class="col-4 col-form-label">Msisdn</label>
                    <div class="col-8">
                        <input id="msisdn" name="msisdn" type="number" class="form-control">
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
        $token = $_POST['token'];
        $trxdate = $_POST['trxdate'];
        $msisdn = $_POST['msisdn'];
        $p = $token . $trxdate . $msisdn;
        $generet = hash('sha256', $p);

        ?>
        <div class="col-md-8">
            <table>
                <tr>
                    <td>Token</td>
                    <td>:<?= $token ?></td>
                </tr>
                <tr>
                    <td>TRX Date</td>
                    <td>:<?= $trxdate ?></td>
                </tr>
                <tr>
                    <td>Msisdn</td>
                    <td>:<?= $msisdn ?></td>
                </tr>
                <tr>
                    <td>X-API-KEY</td>
                    <td>:<?= $generet ?></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

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