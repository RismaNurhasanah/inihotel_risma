<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <a href="<?= base_url('/kamar/tambah') ?>">
            <button class="btn btn-sm btn-info float-right " type=""><i class="fas fa_plus fa-sm">Tambah Data Kamar</i></button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No Kamar</th>
                            <th>Jenis</th>
                            <th>Keterangan Kamar</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No Kamar</th>
                            <th>Jenis</th>
                            <th>Keterangan Kamar</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($kamar as $k) { ?>
                            <tr>
                                <th><?= $k->no_kamar ?></th>
                                <th><?= $k->id_jenis ?></th>
                                <th><?= $k->ket_kamar ?></th>
                                <th><a href="<?= base_url('/kamar/edit/' . $k->id) ?>"><i class="fas fa-edit"></a></th>
                                <th><a href="<?= base_url('/kamar/hapus/' . $k->id) ?>"><i class="fas fa-trash"></a></th>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->