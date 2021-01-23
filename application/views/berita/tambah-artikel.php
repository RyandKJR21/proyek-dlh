<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        	<div class="row">
				<div class="col-lg-8">

				<?= form_open_multipart(''); ?>
					<div class="form-group row">
						<label for="judul" class="col-sm-2 col-form-label">Judul</label>
						<div class="col-sm-10">
							<input type="text" name="judul" class="form-control" id="judul">
							 <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Kategori</label>
						<div class="col-sm-10">
						 <select name="kategori" class="form-control" for="kategori">
                          <option value="">Pilih Kategori</option>
                              <?php foreach($kategori as $k) : ?>
                                 <option value="<?= $k['kategori']; ?>"><?= $k['kategori']; ?></option>
                              <?php endforeach?>
                         </select>
                          <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>');?>
                          </div> 
					</div>
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Isi Berita</label>
						<div class="col-sm-10">
                            <textarea type="text" name="isi" class="form-control" id="summernote"></textarea>
                            <?= form_error('isi', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
					</div>
					
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Pilih Gambar</label>		
						<div class="col-sm-10">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="image" >Choose file</label>
                         </div>
                        </div>
					</div>
					<div class="form-group row">
					 <label for="name" class="col-sm-2 col-form-label">Link Text</label>			 
						<div class="col-sm-10">
                      <textarea type="text" name="text" class="form-control" cols="30" rows="1"></textarea>
                       <?= form_error('text', '<small class="text-danger pl-3">', '</small>');?>
                   		</div>
                     </div>
                     <div class="form-group row">
                     	 <label for="name" class="col-sm-2 col-form-label">DiUpload Oleh</label>  	 
						<div class="col-sm-10">
                          <input type="text" name="uploadby" class="form-control" />
                          <?= form_error('uploadby', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                     </div>
					<div class="form-group row justify-content-end">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Tambah</button>
							<a href="<?php echo base_url('berita/data_artikel'); ?>"
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
