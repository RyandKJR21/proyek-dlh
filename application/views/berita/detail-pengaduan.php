<div class="container-fluid">

          <!-- Page Heading -->
          <div class="container">
          	<div class="row mt-3">
          		<div class="col-md-6">
          			
          			<div class="card">
          				<div class="card-header">
          					Detail Pelapor	
          				</div>	
          				<div class="card-body">
                                   <table class="table">
                                   <tr>
                                        <td>
                                             <h5 class="card-text">Nama Pelapor</h5>
                                        </td>
                                        <td>
                    					<h5 class="card-text">
                                                  <?= $pengaduan['nama_lengkap']; ?>
                                             </h5>
                                        </td>
                                   </tr>
          					<tr>
                                        <td>
                                             <h5 class="card-text">Alamat Pelapor</h5>
                                        </td>
                                        <td>
                                             <h5 class="card-text">
                                             <?= $pengaduan['alamat_pelapor']; ?></h5>
                                        </td>
                                   </tr>
                                   <tr>
                                        <td>
                                             <h5 class="card-text">Foto KTP</h5>
                                        </td>
                                        <td>
                                             <h5 class="card-text">
                                                  <img src="<?=base_url('assets/img/img_pengaduan/') . $pengaduan['foto_ktp']; ?>" class="img-thumbnail" width="350px">
                                             </h5>
                                        </td>
                                   </tr>
                                   <tr>
                                        <td>
                                             <h5 class="card-text">No.Telepon</h5>
                                        </td>
                                        <td>
                    					<h5 class="card-text">
                    						<?= $pengaduan['no_telp']; ?>
                    					</h5>
                                        </td>
                                   </tr>
                                   <tr>
                                        <td>
                                             <h5 class="card-text">Foto Kejadian</h5>
                                        </td>
                                        <td>
                                             <h5 class="card-text">
                                                  <img src="<?=base_url('assets/img/img_pengaduan/') . $pengaduan['foto_kejadian']; ?>" class="img-thumbnail" width="350px">
                                             </h5>
                                        </td>
                                   </tr>
                                   <tr>
                                        <td>
                                             <h5 class="card-text">Alamat Kejadian</h5>
                                        </td>
                                        <td>
                    					<h5 class="card-text">
                    						<?= $pengaduan['alamat_kejadian']; ?>
                    					</h5>
                                        </td>
                                   </tr>
                                   <tr>
                                   <tr>
                                        <td>
                                             <h5 class="card-text">Keterangan</h5>
                                        </td>
                                        <td>
                                             <h5 class="card-text">
                                                  <?= $pengaduan['keterangan']; ?>
                                             </h5>
                                        </td>
                                   </tr>
                                   <tr>
                                        <td>
                                             <h5 class="card-text">Link Google Maps</h5>
                                        </td>
                                        <td>
                                             <h5 class="card-text">
                                                  <a href="<?= $pengaduan['link_google_maps']; ?>"><?= $pengaduan['link_google_maps']; ?></a>
                                             </h5>
                                        </td>
                                   </tr>
                                   <tr>
                                        <td>
                                             <h5 class="card-text">Dikirim</h5>
                                        </td>
                                        <td>
                                             <h5 class="card-text">
                                                  <?= $pengaduan['date']; ?>
                                             </h5>
                                        </td>
                                   </tr>
                                   </table>
          					<a href="<?= base_url('berita/pengaduan'); ?>" class="btn btn-primary">Kembali
          					</a>
          				</div>
          			</div>
          		</div>
          	</div>
          </div>

</div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->