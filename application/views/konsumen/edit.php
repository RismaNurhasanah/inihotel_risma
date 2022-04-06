<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heding text-uppercase" >Update Profile</h2>

                <form action="<?= base_url('/konsumen/proses_edit')?>" method="post">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%">No konsumen</td>
                            <td>:</td>
                            <td class="text-start">
                                <input type="hidden" name="id_konsumen" value="<?= $konsumen['id_konsumen'] ?>">
                                <input class="form-control" type="text" id="email "name="email" value="<?= $konsumen['email'] ?>"readonly>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Nama Depan</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="nama_depan" name="nama_depan" value="<?= $konsumen['nama_depan'] ?>" ></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Nama Belakang</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="nama_belakang" name="nama_belakang" value="<?= $konsumen['nama_belakang'] ?>"></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Alamat</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="alamat" name="alamat" value="<?= $konsumen['alamat'] ?>" ></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Kota</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="kota" name="kota" value="<?= $konsumen['kota'] ?>" ></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Provinsi</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="provinsi" name="provinsi" value="<?= $konsumen['provinsi'] ?>" ></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Negara</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="negara" name="negara" value="<?= $konsumen['negara'] ?>" ></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">No Identitas</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="no_identitas" name="no_identitas" value="<?= $konsumen['no_identitas'] ?>" ></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">No Hp</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="no_telp" name="no_telp" value="<?= $konsumen['no_telp'] ?>" ></td>
                        </tr>
                        <tr>
                            <td colspan="3"><button type="submit" class="btn btn-primary">update</butoon>
                           </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
