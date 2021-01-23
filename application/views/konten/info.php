<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/berita_css/css.css" media="screen" />
<div class="content_area">
  <div class="main_content floatleft">
    <div class="single_left_coloum_wrapper">

      <h2 class="title">Info</h2>

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
             <div class="panel-body">
              <?php foreach ($inf as $i) {
                ?>
                <a href="<?= base_url('konten/info_selengkapnya/'. $i['text']); ?>"><h3><?= $i['judul']; ?></h3></a>
                <div class="info-meta">
                  <ul class="list-inline">
                    <li><i class="fa fa-clock"></i> <?= $i['tanggal']; ?></li>
                    <li><i class="fa fa-user"></i> Posting by <?= $i['uploadby']; ?></li>
                    <li class="pull-right">Category : <?= $i['kategori']; ?></li>
                  </ul>
                </div>
                <hr>

                <div class="media">
                 <a class="pull-left">
                  <img class="media-object" src="<?= base_url('assets/img/img_info/') . $i['image']; ?>" alt="<?= $i['image']; ?>" width="210px">
                </a>
                <div class="media-body">
                  <p><?php echo (str_word_count($i['isi']) > 20 ? substr($i['isi'],0,350)."[..]" : $i['isi']); ?>
                </p>
              </div>
              <p style="text-align:right;">
                <a href="<?= base_url('konten/info_selengkapnya/' . $i['text']); ?>">
                  <button class="btn btn-primary">Read More</button>
                </a>
              </p>
            </div>
            <hr>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
