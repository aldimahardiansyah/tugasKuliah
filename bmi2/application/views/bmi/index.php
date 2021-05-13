<div class="col-md-12">
    <h3>Daftar BMI Pasien</h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal Periksa</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Berat</th>
                <th>Tinggi</th>
                <th>BMI</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_bmipasien as $bmipasien) {
            ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $bmipasien->tanggal ?></td>
                <td><?= $bmipasien->pasien->kode ?></td>
                <td><?= $bmipasien->pasien->nama ?></td>
                <td><?= $bmipasien->pasien->gender ?></td>
                <td><?= $bmipasien->bmi->berat ?></td>
                <td><?= $bmipasien->bmi->tinggi ?></td>
                <td><?= $bmipasien->bmi->nilaibmi() ?></td>
                <td><?= $bmipasien->bmi->statusbmi() ?></td>
            </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>