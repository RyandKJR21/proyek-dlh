    <div class="content_area">
      <div class="main_content floatleft">
        <div class="single_left_coloum_wrapper">
          <embed src="<?= base_url('file/data/IKLH_2017.pdf'); ?>" width="650" height="750"> </embed>
          <p><a href="iklh_2017_download">>>>>Download pdf<<<</a></p>
                  <div class="related-posts">
                   <p><h2 class="title">Recommended for you</h2></p>
                    <?php foreach ($seputar_dlh as $s) {
                      ?>
                      <div class="single_left_coloum floatleft"> <img src="<?=base_url('assets/img/img_berita/') . $s['image']; ?>" alt="<?= $s['image']; ?>" />
                        <a href="<?= base_url('konten/berita_selengkapnya/'. $s['text']); ?>"><h3><?= $s['judul']; ?></h3></a>
                        <p><?php echo (str_word_count($s['isi']) > 5 ? substr($s['isi'],0,150)."[..]" : $s['isi']); ?></p>
                        <a class="readmore" href="<?= base_url('konten/berita_selengkapnya/' . $s['text']); ?>">selengkapnya</a> </div>
                        <?php
                      } ?>
                    </div>
                
              </div>
          </div>
      