<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Jenis</h4>
                        <br>
                        <form action="proses_tambah" method="POST">
                            <table class="table">
                                <tr>
                                    <td>No Kamar</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="id_user" id="id_user">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="konsumen" id="konsumen">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td><input type="date" class="form-control" maxlength="50" name="tgl" id="tgl">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Kamar</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="id_jenis" id="id_jenis">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Durasi</td>
                                    <td>:</td>
                                    <td><input type="time" class="form-control" maxlength="50" name="durasi" id="durasi">
                                    </td>
                                </tr>
                                </tr>
                                    <td colspan="3"><button type="submit" class="btn btn-dark" value="simpan">simpan</butoon></td>
                                <tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->