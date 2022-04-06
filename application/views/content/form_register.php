<section class="page-section bg-light" id="team">
        <div class="container">
            <h3>Silahkan Login Disini</h3>
            <h6>Sudah Punya Akun ?</h6><a href="<?= base_url('index.php/auth/')?>">Klik Disini</a>
    <form action="<?= base_url('index.php/auth/proses_register')?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type='password' class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama lengkap</label>
            <input name="nama_lengkap" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">No hp</label>
            <input name="no_hp" type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>