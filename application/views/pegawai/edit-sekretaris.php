<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        	<div class="row">
				<div class="col-lg-8">

				<?= form_open_multipart(''); ?>
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Nama Pegawai</label>
						<div class="col-sm-10">
							<input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" value="<?= $sek['nama_pegawai']; ?>">
							 <?= form_error('nama_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Nip</label>
						<div class="col-sm-10">
							<input type="text" name="nip" class="form-control" id="nip" value="<?= $sek['nip']; ?>">
							 <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Jabatan</label>
						<div class="col-sm-10">
							<select name="jabatan" class="form-control" value="<?php echo $sek['jabatan']; ?>" selected>
                                        <option value="Sekretaris"
                                            <?php if ($sek['jabatan'] == "Sekretaris") echo "selected"; ?>>
                                            Sekretaris
                                        </option>
                                        <option value="Kasubag Keuangan"
                                            <?php if ($sek['jabatan'] == "Kasubag Keuangan") echo "selected"; ?>>
                                            Kas.Keuangan
                                        </option>
                                        <option value="Kasubag Program"
                                            <?php if ($sek['jabatan'] == "Kasubag Program") echo "selected"; ?>>
                                            Kas.Program
                                        </option>
                                        <option value="Kasubag Umum dan Kepegawaian"
                                            <?php if ($sek['jabatan'] == "Kasubag Umum dan Kepegawaian") echo "selected"; ?>>
                                            Kas.Umum dan Kepegawaian
                                        </option>
                                    </select>
							 <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
					</div>
					
					<div class="form-group row justify-content-end">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Edit</button>
						</div>
					</div>
				<?= form_close(); ?>

				</div>
			</div>
			
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
