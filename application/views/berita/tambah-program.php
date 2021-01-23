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
						<label for="name" class="col-sm-2 col-form-label">Isi</label>
						<div class="col-sm-10">
                            <textarea type="text" name="isi" class="form-control" id="summernote"></textarea>
                            <?= form_error('isi', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Pilih File</label>		
						<div class="col-sm-10">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="file1" id="file1">
                            <label class="custom-file-label" for="file1" >Choose file</label>
                         </div>
                        </div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Pilih File</label>		
						<div class="col-sm-10">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="file2" id="file2">
                            <label class="custom-file-label" for="file2" >Choose file</label>
                         </div>
                        </div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Pilih File</label>		
						<div class="col-sm-10">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="file3" id="file3">
                            <label class="custom-file-label" for="file3" >Choose file</label>
                         </div>
                        </div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Pilih File</label>		
						<div class="col-sm-10">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="file4" id="file4">
                            <label class="custom-file-label" for="file4" >Choose file</label>
                         </div>
                        </div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Pilih File</label>		
						<div class="col-sm-10">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="file5" id="file5">
                            <label class="custom-file-label" for="file5" >Choose file</label>
                         </div>
                        </div>
					</div>
                    <div class="form-group row">
                     	 <label for="name" class="col-sm-2 col-form-label">DiUpload Oleh</label>  	 
						<div class="col-sm-10">
                          <input type="text" name="uploadby" class="form-control" />
                          <?= form_error('uploadby', '<small class="text-danger pl-3">', '</small>'); ?>
                    	</div>
                    </div>
                    <div class="form-group row">
                     	 <label for="name" class="col-sm-2 col-form-label">Link Text</label>  	 
						<div class="col-sm-10">
                          <input type="text" name="text" class="form-control" id="text"/>
                          <?= form_error('text', '<small class="text-danger pl-3">', '</small>'); ?>
                    	</div>
                    </div>
					<div class="form-group row justify-content-end">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Tambah</button>
							<a href="<?php echo base_url('berita/program'); ?>"
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
