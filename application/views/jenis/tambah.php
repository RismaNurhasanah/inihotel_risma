<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<section class="page-section bg-light" id="team">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 text-center">
            <div class="card shadow mb-4">
                <div class="card-body">
                <div class="table-responsive">
                        <h4 class="section-heding text-uppercase">Tambah Data Jenis</h4>
                        <br>
                        <form action="proses_tambah" method="POST">
                            <table class="table table-hover">
                                <tr>
                                    <td>Jenis</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="nama_jenis" id="nama_jenis">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="keterangan" id="keterangan">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Foto</td>
                                    <td>:</td>
                                    <td><input type="file" class="form-control" maxlength="50" name="foto" id="foto">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="harga" id="harga">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"><button type="submit" class="btn btn-dark" value="simpan">simpan</butoon></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

</div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->