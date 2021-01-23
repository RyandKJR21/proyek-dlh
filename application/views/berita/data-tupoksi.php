<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

         <div class="row">
          <div class="col-lg">

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
                  <th scope="col">Updated at</th>
                  <th scope="col">Diupload Oleh</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                <?php foreach ($tup as $t) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $t['judul']; ?></td>
                  <td><?= $t['updated_at']; ?></td>
                  <td><?= $t['uploadby']; ?></td>
                  <td><a class="badge badge-success" href="<?= base_url('berita/edit_tupoksi/'); ?>">Edit</a>
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

     