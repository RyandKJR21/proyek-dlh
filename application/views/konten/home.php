    <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
          <?php foreach ($boxslider as $b) {
            ?>
            <li><img src="<?= base_url('assets/img/img_galeri/') . $b['image']; ?>" alt="slidebox" title="<?= $b['judul_image']; ?>" style="width: 980px; height: 350px;" /></li>
            <?php
          } ?>
        </ul>
      </div>
    </div>
    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft">
          <div class="single_left_coloum_wrapper">
            <h2 class="title">Seputar Dinas Lingkungan Hidup</h2>
            <a class="more" href="<?= base_url('konten/seputar_dlh'); ?>">more</a>
            <?php foreach ($seputar_dlh as $s) {
              ?>
              <div class="single_left_coloum floatleft"> <img src="<?=base_url('assets/img/img_berita/') . $s['image']; ?>" alt="<?= $s['image']; ?>" />
                <a href="<?= base_url('berita/berita_selengkapnya/'. $s['text']); ?>"><h3><?= $s['judul']; ?></h3></a>
                <p><?php echo (str_word_count($s['isi']) > 5 ? substr($s['isi'],0,150)."[..]" : $s['isi']); ?></p>
                <a class="readmore" href="<?= base_url('konten/berita_selengkapnya/' . $s['text']); ?>">selengkapnya</a> </div>
                <?php
              } ?>
            </div>
            <div class="single_left_coloum_wrapper">
              <h2 class="title">Artikel</h2>
              <a class="more" href="<?= base_url('konten/artikel'); ?>">more</a>
              <?php foreach ($list_artikel as $l) {
                ?>
                <div class="single_left_coloum floatleft"> <img src="<?=base_url('assets/img/img_artikel/') . $l['image']; ?>" alt="<?= $l['image']; ?>" />
                  <a href="<?= base_url('berita/artikel_selengkapnya/'. $l['text']); ?>"><h3><?= $l['judul']; ?></h3></a>
                  <p><?php echo (str_word_count($l['isi']) > 5 ? substr($l['isi'],0,150)."[..]" : $l['isi']); ?></p>
                  <a class="readmore" href="<?= base_url('konten/artikel_selengkapnya/' . $l['text']); ?>">selengkapnya</a> </div>
                  <?php
                } ?>
              </div>
              <div class="single_left_coloum_wrapper single_cat_left">
                <h2 class="title">Pengaduan Masyarakat</h2>
                <a class="more" href="#">more</a>
                <?php foreach ($pengaduan as $p) {
                  ?>
                  <div class="single_cat_left_content floatleft">
                    <table>
                      <tr>
                        <td><h3>Nama</h3></td> <td><h3>&nbsp:&nbsp </h3></td> <td><h3><?= $p['nama_lengkap']; ?></h3></td>
                      </tr>
                      <tr>
                        <td><h5>Ket</h5></td> <td><h5>&nbsp:&nbsp</h5></td><td><h5><?php echo (str_word_count($p['keterangan']) > 5 ? substr($p['keterangan'],0,150)."" : $p['keterangan']); ?></h5></td>
                      <tr>
                        <td>Tanggal</td>
                        <td>&nbsp:&nbsp</td>
                        <td>
                          <?= $p['date']; ?>
                        </td>
                      </tr>
                      </tr>
                    </table>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="right_coloum floatright">
              <div class="single_right_coloum">
                <h2 class="title">Info Terkini</h2>
                <?php foreach ($list_info as $l) { ?>       
                  <div class="single_cat_right_content editorial"> <img src="<?=base_url('assets/img/img_info/') . $l['image']; ?>" alt="<?= $l['image']; ?>" />
                    <a href="<?= base_url('konten/info_selengkapnya/'. $l['text']); ?>"><h3><?= $l['judul']; ?></h3></a>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>