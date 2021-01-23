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
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat Pelapor</th>
                  <th scope="col">Keterangan Kejadian</th>
                  <th scope="col">Link Google Maps</th>
                  <th scope="col">Dikirim</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                <?php foreach ($pengaduan as $p) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $p['nama_lengkap']; ?></td>
                  <td><?= $p['alamat_pelapor']; ?></td>
                  <td><?= $p['keterangan']; ?></td>
                   <td><a href="<?= $p['link_google_maps']; ?>"><?= $p['link_google_maps']; ?></a></td>
                  <td><?= $p['date']; ?></td>
                  <td>
                    <a class="badge badge-danger" href="<?= base_url('berita/hapus_pengaduan/'); ?><?= $p['Id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
                    <a class="badge badge-primary" href="<?= base_url('berita/detail_pengaduan/'); ?><?= $p['Id'];?>">Detail</a></td>
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
     