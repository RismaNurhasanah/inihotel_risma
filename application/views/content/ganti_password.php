<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heding text-uppercase" >Ganti Password</h2>
                <h3 class="section-subheading text-muted" >Selamat Datang Di Hotel Risma</h3>
                <form action="<?= base_url('index.php/profile/proses_ganti_password')?>" method="post">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%">Email</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" name="email" value="<?= $user['email'] ?>"readonly></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Password Baru</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="password" name="password1" ></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Ulangi Password</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="password" name="password2"  ></td>
                        </tr>
                        <tr>
                            <td colspan="3"><button type="submit" class="btn btn-primary">Ganti</butoon>
                           </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
