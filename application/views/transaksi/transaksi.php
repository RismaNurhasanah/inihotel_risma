<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->


			<section class="page-section bg-light" id="team">
				<div class="card shadow mb-4">
                    <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                            <a href="<?= base_url('transaksi/tambah')?>" >
                            <button class="btn btn-sm btn-info float-right " type=""><i class="fas fa_plus fa-sm">Tambah Data Transaksi</i></button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            
                            </div>
                            <div>
                            <center><table border="1" ></center>
							<table class="table table-bordered table-">
                                <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Admin</th>
                                            <th>Nama Konsumen</th>
                                            <th>Tanggal Transaksi </th>
                                            <th>Jenis</th>
                                            <th>Durasi</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                </thead>
                                <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Admin</th>
                                            <th>Nama Konsumen</th>
                                            <th>Tanggal Transaksi </th>
                                            <th>Jenis</th>
                                            <th>Durasi</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                </tfoot>
                                <tbody>
                                    <?php $no = 1;
                                        
                                        foreach($transaksi as $t) { ?>
                                    <tr>
                                        <th><?= $no?></th>
                                        <th><?= $t->id_user?></th>
                                        <th><?= $t->id_konsumen?></th>
                                        <th><?= $t->tgl?></th>
                                        <th><?= $t->id_jenis?></th>
                                        <th><?= $t->durasi?></th>
                                        <th><a href="<?= base_url('/transaksi/edit/'.$t->id_transaksi) ?>"><i class="fas fa-edit"></a></th>
                                        <th><a href="<?= base_url('/transaksi/hapus/'.$t->id_transaksi) ?>"><i class="fas fa-trash"></a></th>
                                    </tr>
                                    <?php $no++; }?>
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