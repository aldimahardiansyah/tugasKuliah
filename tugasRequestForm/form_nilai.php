<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
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
</head>

<body>
    <header style="padding:0.8em;background-color:#efefef;margin-bottom:1em;">
        Sistem Penilaian
    </header>
    <form class="form-horizontal" method="GET" action="hasil_form_nilai.php">
        <fieldset>

            <!-- Form Name -->
            <legend>Form Nilai Siswa</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>
                <div class="col-md-4">
                    <input id="nama" name="nama" type="text" placeholder="Masukkan Nama Lengkap"
                        class="form-control input-md" required="">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="matkul">Mata Kuliah</label>
                <div class="col-md-4">
                    <select id="matkul" name="matkul" class="form-control">
                        <option value="DDP">Dasar-Dasar Pemrograman</option>
                        <option value="BD1">Basis Data I</option>
                        <option value="WEB1">Pemrograman Web</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nilai_uts">Nilai UTS</label>
                <div class="col-md-4">
                    <input id="nilai_uts" name="nilai_uts" type="number" placeholder="Nilai UTS"
                        class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nilai_uas">Nilai UAS</label>
                <div class="col-md-4">
                    <input id="nilai_uas" name="nilai_uas" type="number" placeholder="Nilai UAS"
                        class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nilai_tugas">Nilai Tugas/Praktikum</label>
                <div class="col-md-4">
                    <input id="nilai_tugas" name="nilai_tugas" type="number" placeholder="Nilai Tugas"
                        class="form-control input-md" required="">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="proses"></label>
                <div class="col-md-4"><a href="array_siswa.php"><a href="hasil_form_nilai.php"></a>
                        <input type="submit" value="Simpan" class="btn btn-primary" name="proses" /></a>
                </div>
            </div>

        </fieldset>
    </form>
</body>

</html>