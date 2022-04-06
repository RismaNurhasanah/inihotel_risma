<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Kamar</h4>
                        <br>
                        <form action="proses_tambah" method="POST">
                            <table class="table">
                                <tr>
                                    <td>No Kamar</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="no_kamar" id="no_kamar">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="id_jenis" id="id_jenis">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="ket_kamar" id="ket_kamar">
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