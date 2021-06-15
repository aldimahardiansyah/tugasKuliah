<nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.html">SIWIKODE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('index.php') ?>">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/wisata/index/rekreasi') ?>">Wisata Rekreasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kuliner.php">Wisata Kuliner</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Registrasi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('index.php/wisata/create') ?>">Registrasi wisata rekreasi</a>
                        <a class="dropdown-item" href="form_kuliner.html">Rekreasi wisata kuliner</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.html">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/kelompok') ?>">Kelompok</a>
                </li>
                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari Wisata" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cari</button>
                </form> -->

            </ul>
            <a href="login.html"><button class="btn btn-outline-light my-2 my-sm-0">Login</button></a>
        </div>
    </nav>