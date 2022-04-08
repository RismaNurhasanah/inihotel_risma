<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
 
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heding text-uppercase" >Update Profile</h2>
                <h3 class="section-subheading text-muted" >Selamat Datang Di Hotel Risma</h3>
                <form action="<?= base_url('/kamar/proses_edit')?>" method="post">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%">No Kamar</td>
                            <td>:</td>
                            <td class="text-start">
                                <input type="hidden" name="id_kamar" value="<?= $kamar['id_kamar'] ?>">
                                <input class="form-control" type="text" id="no_kamar "name="no_kamar" value="<?= $kamar['no_kamar'] ?>"readonly>

                        </td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Jenis</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="id_jenis" name="id_jenis" value="<?= $kamar['id_jenis'] ?>"></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Keterangan</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" id="ket_kamar" name="ket_kamar" value="<?= $kamar['ket_kamar'] ?>" ></td>
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