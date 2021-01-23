<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        	<div class="row">
				<div class="col-lg-8">

				<?= form_open_multipart(''); ?>
					<div class="form-group row">
						<label for="judul" class="col-sm-2 col-form-label">Kategori</label>
						<div class="col-sm-10">
							<input type="text" name="kategori" class="form-control" id="kategori" value="<?= $kat['kategori']; ?>">
							 <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
					</div>
                     <div class="form-group row">
                     	 <label for="name" class="col-sm-2 col-form-label">Alias</label>  	 
						<div class="col-sm-10">
                          <input type="text" name="alias" class="form-control" value="<?= $kat['alias']; ?>" />
                          <?= form_error('alias', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                     </div>
					<div class="form-group row justify-content-end">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Update</button>
							<a href="<?php echo base_url('berita/data_kategori'); ?>"
                                        class="btn btn-danger">Batal</a>
						</div>
					</div>
				<?= form_close(); ?>

				</div>
			</div>
			
        <!-- /.container-fluid -->
      </div>
  </div>
      <!-- End of Main Content -->
