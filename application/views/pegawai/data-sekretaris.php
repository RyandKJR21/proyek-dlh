<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

         <div class="row">
          <div class="col-lg">

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSekretarisModal">Add New Sekretaris</a>
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
                  <th scope="col">Nip</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                <?php foreach ($sek as $s) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $s['nama_pegawai']; ?></td>
                  <td><?= $s['nip']; ?></td>
                   <td><?= $s['jabatan']; ?></td>
                  <td><a class="badge badge-success" href="<?= base_url('pegawai/edit_sekretaris/'); ?><?= $s['id']; ?>">Edit</a>
                    <a class="badge badge-danger" href="<?= base_url('pegawai/hapus_sekretaris/'); ?><?= $s['id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
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
        <div class="modal fade" id="newSekretarisModal" tabindex="-1" role="dialog" aria-labelledby="newSekretarisModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
            <h5 class="modal-title" id="newSekretarisModalLabel">Add New Sekretaris</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
              </div>
          <?= form_open_multipart('pegawai/sekretaris'); ?>
          <div class="modal-body">
            <div class="form-group">
              <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" placeholder="Nama Sekretaris">        
               <?= form_error('nama_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <input type="text" name="nip" class="form-control" id="nip" placeholder="Nip pegawai">
               <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <select name="jabatan" id="jabatan" class="form-control"><option>Pilih Jabatan</option>
                <option value="Sekretaris">Sekretaris</option>
                <option value="Kasubag Keuangan">Kas.Keuangan</option>
                <option value="Kasubag Program">Kas.Program</option>
                <option value="Kasubag Umum dan Kepegawaian">Kas.Umum dan Kepegawaian</option>
              </select>
               <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
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
     