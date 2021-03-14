<?php
$proses = $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
echo '<br/>Nama : ' . $nama_siswa;
echo '<br/>Mata Kuliah : ' . $mata_kuliah;
echo '<br/>Nilai UTS : ' . $nilai_uts;
echo '<br/>Nilai UAS : ' . $nilai_uas;
echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;