<div aria-label="breadcrumb" class="breadcrumb d-flex justify-content-end p-1">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail <?php echo $wisata->nama ?></li>
        </ol>
    </div>

    <div class="judul_rekreasi" style="margin-top: -35px;">
        <h1 class="kata">Detail <?php echo $wisata->nama; ?></h1>
        <div class="bintang ml-5">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>

        <div class="card">
            <div class="card-header">
                Galery
            </div>
            <div class="card-body">
                <blockquote class="blockquote ml-5 mr-5 mb-0">
                    <p>
                        <img src="assets/img/saa.jpg" width="190px" alt="Gambar Taman Rekreasi Wiladatika">

                        <img src="assets/img/wiladatika2.jpg" width="190px" alt="Gambar Taman Rekreasi Wiladatika">

                        <img src="assets/img/wiladatika3.jpg" width="190px" alt="Gambar Taman Rekreasi Wiladatika">

                        <img src="assets/img/wiladatika4.jpg" width="190px" alt="Gambar Taman Rekreasi Wiladatika">

                        <img src="assets/img/wiladatika5.jpg" width="190px" alt="Gambar Taman Rekreasi Wiladatika">

                        <img src="assets/img/wiladatika6.jpg" width="190px" alt="Gambar Taman Rekreasi Wiladatika">
                    </p>
                </blockquote>
            </div>
        </div>

        <div class="containerr card-deck" style="margin-top: 10px;">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3>Deskripsi</h3><br>
                            <p class="paragraph"><?php echo $wisata->deskripsi ?></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3>Alamat dan peta lokasi</h3>
                            <div class="d-flex justify-content-between flex-wrap">
                                <div style="max-width: 200px;">
                                    <p><?php echo $wisata->alamat ?></p>
                                </div>
                                <div>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d416.76908187075156!2d106.78850600785778!3d-6.394250371059102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e93985902917%3A0x70a894ff5e4a3b20!2sRumah%20Makan%20Saung%20Talaga!5e0!3m2!1sen!2ssg!4v1610681856115!5m2!1sen!2ssg"
                                        width="300" height="200" frameborder="0" style="border:0;" allowfullscreen=""
                                        aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="judul_testimoni">
            Testimoni & Komentar
        </div>
        <div class="row mt-2">
            <div class="col ml-4">
                Artis <br>
                <div>
                    <p><img src="assets/img/rafi.jpg" width="110px" style="float:left;" />Tempatnya sejuk dan
                        menenangkan.</p>
                </div>
            </div>
            <div class="col">
                Pejabat <br>
                <div>
                    <p><img src="assets/img/pejabat.jpg" width="120px" style="float:left;" />Sangat cocok untuk
                        menengkan diri ketika stres banyak kerjaan.</p>
                </div>
            </div>
            <div class="col">
                Warga <br>
                <div>
                    <p><img src="assets/img/warga.jpg" width="110px" style="float:left;" />Tempat yang sangat bagus.</p>
                </div>
            </div>
        </div>

        <br> <br>