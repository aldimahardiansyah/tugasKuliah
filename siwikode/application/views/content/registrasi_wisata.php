  <!-- Breadcrumb -->
  <div aria-label="breadcrumb" class="breadcrumb d-flex justify-content-end p-1">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Registrasi</a></li>
      <li class="breadcrumb-item active" aria-current="page">Registrasi Wisata</li>
    </ol>
  </div>

  <section style="margin-top: -35px; margin-bottom: 50px;">
    <h2 class="scheduler-border rounded-top">Form Registrasi Wisata</h2>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <fieldset class="scheduler-border">

          <?php  
            if (isset($error)){
              echo '<div class="p-3 mb-2 bg-danger text-white"> Error:'.$error. '</div>';
            }
          ?>

            <form action="restore" method="POST" enctype='multipart/form-data'>

              <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Tempat Wisata</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-address"></i>
                      </div>
                    </div>
                    <input id="nama" name="nama" placeholder="Nama Wisata" type="text" class="form-control">
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="jenis" class="col-4 col-form-label">Jenis Wisata</label>
                <div class="col-8">
                  <select id="jenis" name="jenis" class="custom-select">
                    <?php foreach($jenis as $jns){ ?>
                    <option value="<?php echo $jns['id']; ?>"><?php echo $jns['nama']; ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="desk" class="col-4 col-form-label">Deskripsi Wisata</label>
                <div class="col-8">
                  <textarea id="desk" name="desk" cols="40" rows="3" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="kontak" class="col-4 col-form-label">Kontak Person</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-whatsapp"></i>
                      </div>
                    </div>
                    <input id="kontak" name="kontak" placeholder="Kontak" type="text" class="form-control">
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="hp" class="col-4 col-form-label">No HP/Telpon</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-telegram"></i>
                      </div>
                    </div>
                    <input id="hp" name="hp" placeholder="No HP" type="text" class="form-control">
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                      </div>
                    </div>
                    <input id="email" name="email" placeholder="Email" type="text" class="form-control">
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="web" class="col-4 col-form-label">Alamat Web</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-external-link-square"></i>
                      </div>
                    </div>
                    <input id="web" name="web" placeholder="https://" type="text" class="form-control">
                  </div>
                </div>
              </div>
              
              <div class="form-group row">
                <label for="alamat" class="col-4 col-form-label">Alamat Lengkap</label>
                <div class="col-8">
                  <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="longitude" class="col-4 col-form-label">Longitude</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-arrows"></i>
                      </div>
                    </div>
                    <input id="longitude" name="longitude" placeholder="Longitude" type="text" class="form-control">
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="foto" class="col-4 col-form-label">foto Tempat Wisata (1)</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input id="foto" name="foto" type="file" class="form-control">
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="daftar" type="submit" class="btn btn-primary">Daftar</button>
                  <a href="#"><button name="batal" type="reset" class="btn btn-primary">Bersihkan Form</button></a>
                  <br><br>
                </div>
              </div>
            </form>
          </fieldset>
        </div>
      </div>

    </div>
  </section>