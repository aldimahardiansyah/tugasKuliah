<section class="lgn">
        <div class="login-box">
            <h4>LOGIN</h4>
            <hr />
            <form method="POST" name="formPendaftaran" action="<?= base_url('index.php/login/aksi_login') ?>" onsubmit="return validateForm()">
                <input name="username" class="username" type="text" placeholder="Masukkan Username" />
                <input name="pass" class="password" type="password" placeholder="Masukkan Password" />
                <input class="btn-primary tombol" type="submit" value="Login" />
            </form>
        </div>
    </section>
    <script>
        var uname = "admin";
        var password = "admin";
        function validateForm() {
            if (document.forms["formPendaftaran"]["username"].value == "") {
                alert("Username Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["username"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["pass"].value == "") {
                alert("Password Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["pass"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["username"].value == uname && document.forms["formPendaftaran"]["pass"].value == password) {
                alert("Login Berhasil!")
                return true
            }
            if (document.forms["formPendaftaran"]["username"].value != uname && document.forms["formPendaftaran"]["pass"].value != password) {
                alert("Username atau Password Salah!")
                return false
            }
        }
    </script>