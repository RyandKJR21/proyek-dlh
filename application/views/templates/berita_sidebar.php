      <div class="sidebar floatright">
        <div class="single_sidebar">
          <div class="popular">
            <h2 class="title">Berita Sebelumnya</h2>
            <ul>
              <?php foreach ($sidebar as $s) { ?>  
              <li>                
                <div class="single_popular">
                  <p style="color: gray;"><i class="fa fa-clock"></i> <?= $s['tanggal']; ?> | <i class="fa fa-user"></i> <?= $s['uploadby']; ?></p>
                   <a href="<?= base_url('konten/berita_selengkapnya/'. $s['text']); ?>"><h3><?= $s['judul']; ?></h3></a>
                </div>
              </li>
              <?php } ?>
            </ul>
            </div>
        </div>

        <div class="single_sidebar"> 
          <h2 class="title">SISARMAN</h2>
          <a href="<?= base_url('konten/layanan_pengaduan'); ?>"><img src=" <?= base_url('assets/img/sisarman.jpg'); ?>" alt="sisarman"/></a>
        </div>
        <div class="single_sidebar"> 
          <h2 class="title">TITIK LOKASI DINAS LINGKUNGAN HIDUP</h2>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.239615779005!2d122.51135421426153!3d-3.97101369711197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98f3341b1b437f%3A0xbbda5f64a661ef61!2sDinas%20Lingkungan%20Hidup%20Provinsi%20Sulawesi%20Tenggara!5e0!3m2!1sid!2sid!4v1598020972922!5m2!1sid!2sid" width="250" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="single_sidebar">
          <h2 class="title">Kontak Kami</h2>
          <ul>
              <li>
                <div class="single_popular">
                  <h3><?= $kontak_kami['isi']; ?></h3>
                          <div class="social">
                            <ul>
                              <!-- <li><a href="#" class="twitter"></a></li> -->
                              <li><a href="https://web.facebook.com/dinaslhprovsultra" class="facebook"></a></li>
                            </ul>
                          </div>
                </div>
              </li>
            </ul>
          </div>
      </div>
    </div>