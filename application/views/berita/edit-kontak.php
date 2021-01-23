<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <div class="row">
        <div class="col-lg-8">

        <?= form_open_multipart(''); ?>
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Isi</label>
            <div class="col-sm-10">
                            <textarea type="text" name="isi" class="form-control" id="summernote"> <?= $kon['isi']; ?></textarea>
                            <?= form_error('isi', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
          </div> 
          <div class="form-group row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="<?php echo base_url('berita/data_kontak'); ?>"
                                        class="btn btn-danger">Batal</a>
            </div>
          </div>
        <?= form_close(); ?>

        </div>
      </div>
      </div>
        <!-- /.container-fluid -->
  </div>
      <!-- End of Main Content -->
