<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

         <div class="row">
          <div class="col-lg">

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newKategoriModal">Add New Kategori</a>
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
                  <th scope="col">Kategori</th>
                  <th scope="col">Alias</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                <?php foreach ($kat as $k) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $k['kategori']; ?></td>
                  <td><?= $k['alias']; ?></td>
                  <td><a class="badge badge-success" href="<?= base_url('berita/edit_kategori/'); ?><?= $k['id']; ?>">Edit</a>
                    <a class="badge badge-danger" href="<?= base_url('berita/hapus_kategori/'); ?><?= $k['id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
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
        <div class="modal fade" id="newKategoriModal" tabindex="-1" role="dialog" aria-labelledby="newKategoriModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
            <h5 class="modal-title" id="newKategoriModalLabel">Add New Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
              </div>
          <?= form_open_multipart('berita/tambah_kategori'); ?>
          <div class="modal-body">
            <div class="form-group">
              <input type="text" name="kategori" class="form-control" id="kategori" placeholder="Kategori">
            </div>
            <div class="form-group">
              <input type="text" name="alias" class="form-control" id="alias" placeholder="Alias">
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
     