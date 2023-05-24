<!DOCTYPE html>
<html>

<head>
    <title>Hasil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Hasil Formulir</h1>

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Nama</th>
                    <th>email</th>
                    <th>lokasi</th>
                    <th>Jenis Kelamin</th>
                    <th>skill</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $skl['nama'] }}</td>
                    <td>{{ $skl['email'] }}</td>
                    <td>{{ $skl['lokasi'] }}</td>
                    <td>{{ $skl['jenis_kelamin'] }}</td>
                    <td>{{ implode(', ', $skl['skill']) }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>