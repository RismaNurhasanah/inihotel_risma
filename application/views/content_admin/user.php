<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->


			<section class="page-section bg-light" id="team">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading text-uppercase">Profile User</h2>
							<table class="table table-bordered table-hover">
								<tbody>
									<tr>
										<td class="text-start" widht="15%" >Email</td>
										<td>:</td>
										<td class="text-start"><?=$user['email']?></td>
									</tr>
									<tr>
										<td class="text-start" >Nama lengkap</td>
										<td>:</td>
										<td class="text-start"><?=$user['nama_lengkap']?></td>
									</tr>
									<tr>
										<td class="text-start" >No hp</td>
										<td>:</td>
										<td class="text-start"><?=$user['no_hp']?></td>
									</tr>
								</tbody>
							</table>
							Klik <a href="<?= base_url('/user/update_profile')?>">disini</a>untuk update profile anda<br>

							Klik <a href="<?= base_url('/user/ganti_password')?>">disini</a>untuk mengganti password anda<br>
							
							</div>
						</div>
					</div>
			</section>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->