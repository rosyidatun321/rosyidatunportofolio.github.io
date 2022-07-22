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

							<h3 class="card-title">Data Diri Pasien</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<form id="formInputData" action="<?= base_url('saveData'); ?>" method="post">
								<div class="row form-group">
									<div class="col-sm-4 text-right">
										<label for="">Nomor RM :</label>
									</div>
									<div class="col-sm-4 form-group">
										<input type="number" id="no_rm" class="form-control" name="no_rm" maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required="true" autocomplete="false">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-4 text-right">
										<label for="">Nama Pasien :</label>
									</div>
									<div class="col-sm-4 form-group">
										<input type="text" id="nama_pasien" class="form-control" name="nama_pasien" maxlength="25" required="true" autocomplete="false">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-4 text-right">
										<label>Alamat :</label>
									</div>
									<div class="col-sm-4">
										<textarea class="form-control" name="alamat_pasien" rows="2" placeholder="Alamat Lengkap ..." required="true" autocomplete="false"></textarea>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-4 text-right">
										<label for="jenkel">Jenis Kelamin :</label>
									</div>
									<div class="col-sm-4">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="jenkel" value="L">
											<label class="form-check-label">Laki-Laki</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="jenkel" value="P">
											<label class="form-check-label">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-4 text-right">
										<label for="">Nomor Handphone</label>
									</div>
									<div class="col-sm-4">
										<input type="tel" name="no_hp" id="" class="form-control" maxlength="13" required="true" autocomplete="false">
									</div>
								</div>
								<!-- <div class="form-group col-sm-12"> -->
								<div class="row form-group">
									<div class="col-sm-4 text-right">
										<label for="">Status :</label>
									</div>
									<div class="col-sm-4">
										<select name="jenis_rawat" id="jenis_rawat" class="select select2 form-control" required="true">
											<option selected disabled>-</option>
											<option value="1">Rawat Inap</option>
											<option value="2">Rawat Jalan</option>
										</select>
									</div>
								</div>
								<div class="row form-group" id="inputRuangRawat" hidden>
									<div class="col-sm-4 text-right">
										<label for="">Ruang Rawat</label>
									</div>
									<div class="col-sm-4">
										<select name="ruang_rawat" id="ruang_rawat" class="select select2 form-control">
											<option selected disabled>-</option>
											<option value="cendana">Rawat Cendana</option>
											<option value="melati">Rawat Melati</option>
										</select>
									</div>
								</div>
								<!-- </div> -->
								<div class="row form-group">
									<div class="col-sm-4 text-right">
										<label>Keluhan :</label>
									</div>
									<div class="col-sm-4">
										<textarea class="form-control" name="keluhan" rows="3" placeholder="Keluhan ..." required="true" autocomplete="false"></textarea>
									</div>
								</div>
								<div class="row form-group">
									<div class="text-right" style="margin-left: 450px;">
										<button class="btn-success form-control" onclick="inputData()">Submit</button>
									</div>
								</div>
							</form>
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
