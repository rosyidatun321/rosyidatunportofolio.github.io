<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12 text-right">
					<h1 class="m-0">Input Data <i class="nav-icon fas fa-solid fa-edit"></i></h1>
				</div>
			</div>
		</div>
	</div>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- right column -->
				<div class="col-md-12">

					<!-- general form elements disabled -->
					<div class="card card-success">
						<div class="card-header">

							<h3 class="card-title">Monitoring Data Diri Pasien</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">

							<div class="row form-group">
								<div class="col-sm-12">
									<table id="tableMonitoringPasien" class="table dataTable">
										<thead>
											<tr>
												<th>No</th>
												<th>No RM</th>
												<th>Nama</th>
												<th>Jenis Rawat</th>
												<th>Ruang Rawat</th>
												<th>Keluhan</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 1;
											foreach ($pasien as $key) { ?>
												<tr>
													<td><?= $no++; ?></td>
													<td><?= $key['no_rm']; ?></td>
													<td><?= $key['nama']; ?></td>
													<td><?= ($key['jenis_rawat'] == 1) ? 'Rawat Inap' : 'Rawat Jalan'; ?></td>
													<td><?= (!empty($key['ruang_rawat'])) ? $key['ruang_rawat'] : '-'; ?></td>
													<td><?= $key['keluhan']; ?></td>
												</tr>
											<?php	}
											?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- </form> -->
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!--/.col (right) -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
</div>
