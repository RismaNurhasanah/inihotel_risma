<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
 
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heding text-uppercase" >Update Transkasi</h2>
                <h3 class="section-subheading text-muted" >Selamat Datang Di Hotel Risma</h3>
                <form action="<?= base_url('/transaksi/proses_edit')?>" method="post">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%">No transaksi</td>
                            <td>:</td>
                            <td class="text-start">
                                <input type="hidden" name="id" value="<?= $transaksi['id'] ?>">
                                <input class="form-control" type="text" id="id_user "name="id_user" value="<?= $transaksi['id_user'] ?>"readonly>

                        </td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Jenis</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="konsumen" name="konsumen" value="<?= $transaksi['konsumen'] ?>"></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Tanggal</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="date" id="tgl" name="tgl" value="<?= $transaksi['tgl'] ?>" ></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Jenia</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="id_jenis" name="id_jenis" value="<?= $transaksi['id_jenis'] ?>" ></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Durasi</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="time" id="durasi" name="durasi" value="<?= $transaksi['durasi'] ?>" ></td>
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

</div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->