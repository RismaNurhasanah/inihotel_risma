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
                                    <td><input type="text" class="form-control" maxlength="50" name="foto" id="foto">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="harga" id="harga">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn- btn-secondary" value="Simpan" >
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>