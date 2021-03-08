<?php
$proses = $_GET['proses'];
$nama = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

$ns1 = ['nama' => 'Aldi', 'matkul' => 'DDP', 'uts' => 80, 'uas' => 79, 'tugas' => 87];
$ns2 = ['nama' => 'Heni', 'matkul' => 'WEB1', 'uts' => 90, 'uas' => 89, 'tugas' => 77];
$ns3 = ['nama' => 'Dendi', 'matkul' => 'DDP', 'uts' => 82, 'uas' => 75, 'tugas' => 67];
$ns4 = ['nama' => 'Firman', 'matkul' => 'BD1', 'uts' => 86, 'uas' => 77, 'tugas' => 84];

$ns5 = ['nama' => $nama, 'matkul' => $mata_kuliah, 'uts' => $nilai_uts, 'uas' => $nilai_uas, 'tugas' => $nilai_tugas];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Siswa</title>
    <style>
    .table1 {
        font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        width: 50%;
        border: 1px solid #f2f5f7;
    }

    .table1 tr th {
        background: #35A9DB;
        color: #fff;
        font-weight: normal;
    }

    .table1,
    th,
    td {
        padding: 8px 20px;
        text-align: center;
    }

    .table1 tr:hover {
        background-color: #f5f5f5;
    }

    .table1 tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    body {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    </style>
</head>

<body>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" width="100%" class="table1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($ar_nilai as $ns) {
                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $ns['nama'] . '</td>';
                echo '<td>' . $ns['matkul'] . '</td>';
                echo '<td>' . $ns['uts'] . '</td>';
                echo '<td>' . $ns['uas'] . '</td>';
                echo '<td>' . $ns['tugas'] . '</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                echo '<tr/>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>