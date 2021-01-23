<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

         <div class="row">
          <div class="col-lg">

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newGaleriModal">Add New Galeri</a>
            <?php if(validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?>
            </div>
            <?php endif ?>

            <?= $this->session->flashdata('massage'); ?>
            
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Image</th>
                  <th scope="col">Judul Image</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                <?php foreach ($gal as $g) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><img src="<?=base_url('assets/img/img_galeri/') . $g['image']; ?>" width="50px" height="50px"></td>
                  <td><?= $g['judul_image']; ?></td>
                  <td>
                    <a class="badge badge-danger" href="<?= base_url('berita/hapus_galeri/'); ?><?= $g['id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
          </div>
        </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->


        <!-- Modal -->
        <div class="modal fade" id="newGaleriModal" tabindex="-1" role="dialog" aria-labelledby="newGaleriModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
            <h5 class="modal-title" id="newGaleriModalLabel">Add New Galeri</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
              </div>
          <?= form_open_multipart('berita/tambah_galeri'); ?>
          <div class="modal-body">
            <div class="form-group">
              <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="image" >Choose file</label>
                         </div>
            </div>
            <div class="form-group">
              <input type="text" name="judul_image" class="form-control" id="judul_image" placeholder="Judul image">
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
           <?= form_close(); ?>
            </div>
          </div>
        </div>

      </div>
     