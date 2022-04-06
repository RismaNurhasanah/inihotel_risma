<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heding text-uppercase" >Update Profile</h2>

                <form action="<?= base_url('/jenis/proses_edit')?>" method="post">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%">No jenis</td>
                            <td>:</td>
                            <td class="text-start">
                                <input type="hidden" name="id_jenis" value="<?= $jenis['id_jenis'] ?>">
                                <input class="form-control" type="text" id="nama_jenis "name="nama_jenis" value="<?= $jenis['nama_jenis'] ?>"readonly>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Keterangan</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="keterangan" name="keterangan" value="<?= $jenis['keterangan'] ?>"></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Foto</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="foto" name="foto" value="<?= $jenis['foto'] ?>" ></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Harga</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="harga" name="harga" value="<?= $jenis['harga'] ?>" ></td>
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
