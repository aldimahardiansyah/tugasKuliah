<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>

    <style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
    }

    form {
        width: 70%;
    }

    ul {
        list-style-type: none;
        width: 29%;
    }

    li {
        border: 0.1px solid #ddd;
        padding: 6px;
    }
    </style>
</head>

<body>
    <form class="form-horizontal" method="POST" action="form_belanja.php">
        <fieldset>

            <!-- Form Name -->
            <legend>Belanja Online</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="costumer">Costumer</label>
                <div class="col-md-4">
                    <input id="costumer" name="costumer" type="text" placeholder="Nama Costumer"
                        class="form-control input-md" required="">

                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="produk">Pilih Produk</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="produk-0">
                        <input type="radio" name="produk" id="produk-0" value="TV" checked="checked">
                        TV
                    </label>
                    <label class="radio-inline" for="produk-1">
                        <input type="radio" name="produk" id="produk-1" value="Kulkas">
                        Kulkas
                    </label>
                    <label class="radio-inline" for="produk-2">
                        <input type="radio" name="produk" id="produk-2" value="Mesin Cuci">
                        Mesin Cuci
                    </label>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="jumlah">Jumlah</label>
                <div class="col-md-4">
                    <input id="jumlah" name="jumlah" type="number" value="1" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="proses"></label>
                <div class="col-md-4">
                    <input type="submit" value="Kirim" id="proses" name="proses" class="btn btn-success" />
                </div>
            </div>

        </fieldset>
    </form>

    <ul>
        <li class="bg-primary">Daftar Harga</li>
        <li>TV: 4.200.000</li>
        <li>Kulkas: 3.100.000</li>
        <li>Mesin Cuci: 3.800.000</li>
        <li class="bg-primary">Harga Dapat Berubah Setiap Saat</li>
    </ul>

</body>

</html>

<?php
if (isset($_POST['proses'])) {
    $nama = $_POST['costumer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    echo 'Nama Costumer: ' . $nama . '<br/>';
    echo 'Produk Pilihan: ' . $produk . '<br/>';
    echo 'Jumlah Beli: ' . $jumlah . '<br/>';
    echo 'Total Belanja: ';
}