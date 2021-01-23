<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

         <div class="row">
          <div class="col-lg">

            <a href="<?= base_url('berita/tambah_berita'); ?>" class="btn btn-primary mb-3" >Add New Berita</a>
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
                  <th scope="col">Judul</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Diupload Oleh</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                <?php foreach ($berita as $b) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $b['judul']; ?></td>
                  <td><?= $b['kategori']; ?></td>
                   <td><?= $b['uploadby']; ?></td>
                  <td><a class="badge badge-success" href="<?= base_url('berita/edit_berita/'); ?><?= $b['id']; ?>">Edit</a>
                    <a class="badge badge-danger" href="<?= base_url('berita/hapus_berita/'); ?><?= $b['id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
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