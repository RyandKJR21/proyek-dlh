    <div class="content_area">
      <div class="main_content floatleft">
        <div class="single_left_coloum_wrapper">

          <h2 class="title"><?php echo $t_ttl['judul']; ?></h2>
          <span class="entry-date">
            <div style="padding-left: 12px;"><?= $t_ttl['updated_at']; ?>  |  <?= $t_ttl['uploadby']; ?></div>
          </span>
          <br>
          <div style="padding-left: 12px;"><p><?php echo $t_ttl['isi']; ?></p> </div>


                  <div class="related-posts">
                   <p><h2 class="title">Recommended for you</h2></p>
                    <a class="more" href="#">more</a>
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
      