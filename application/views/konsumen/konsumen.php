<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->


			<section class="page-section bg-light" id="team">
				<div class="card shadow mb-4">
                    <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Konsumen</h6>
                            <a href="<?= base_url('index.php/konsumen/tambah')?>" >
                            <button class="btn btn-sm btn-info float-right " type=""><i class="fas fa_plus fa-sm">Tambah Data Konsumen</i></button></a>
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
                                            <th>Email</th>
                                            <th>Nama Depan</th>
                                            <th>Nama Belakang</th>
                                            <th>Alamat</th>
                                            <th>Kota</th>
                                            <th>Provinsi</th>
                                            <th>Negara</th>
                                            <th>No Identitas</th>
                                            <th>No Telpon</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                </thead>
                                <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Email</th>
                                            <th>Nama Depan</th>
                                            <th>Nama Belakang</th>
                                            <th>Alamat</th>
                                            <th>Kota</th>
                                            <th>Provinsi</th>
                                            <th>Negara</th>
                                            <th>No Identitas</th>
                                            <th>No Telpon</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                </tfoot>
                                <tbody>
                                    <?php $no = 1; 
                                    foreach($konsumen as $k) { ?>
                                    <tr>
                                        <th><?= $no?></th>
                                        <th><?= $k->email?></th>
                                        <th><?= $k->nama_depan?></th>
                                        <th><?= $k->nama_belakang?></th>
                                        <th><?= $k->alamat?></th>
                                        <th><?= $k->kota?></th>
                                        <th><?= $k->provinsi?></th>
                                        <th><?= $k->negara?></th>
                                        <th><?= $k->no_identitas?></th>
                                        <th><?= $k->no_telp?></th>
                                        <th><a href="<?= base_url('/konsumen/edit/'.$k->id_konsumen)?>"><i class="fas fa-edit"></a></th>
                                        <th><a href="<?= base_url('/konsumen/hapus/' . $k->id_konsumen)?>"><i class="fas fa-trash"></a></th>
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