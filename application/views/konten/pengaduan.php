    <title><?= $title; ?></title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css">

    <link rel="shortcut icon" href="<?php echo base_url('assets/images/Lambang_Kota_Kendari.png'); ?>">  
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>

    <style type="text/css">
        body {
             background-image: url("<?= base_url('assets/img/pengaduan.jpg'); ?>");
            }
    </style>
    <body>
    <div class="container" style="font-weight: bold;">

        <div class="row">

            <div class="col-xl-8 offset-xl-2 py-5">

                <h1  align="center"><p>Pelayanan Pengaduan Dinas Lingkungan Hidup</p></h1>

                <p class="lead" align="center" style="font-weight: bold;">Silahkan lengkapi semua isian sesuai dengan data yang diperlukan</p>
 
            <?php if(validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?>
            </div>
            <?php endif ?>

            <?= $this->session->flashdata('massage'); ?>

                <?= form_open_multipart(''); ?>

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Nama Lengkap *</label>
                                    <input id="form_name" type="text" name="nama_lengkap" class="form-control" placeholder="Silahkan masukkan nama anda *">
                                    <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Foto KTP *</label>
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="foto_ktp" required>
                                        <label class="custom-file-label" for="foto_ktp" id="foto_ktp">Choose File</label>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Alamat Pelapor *</label>
                                    <textarea id="form_message" name="alamat_pelapor" class="form-control" style="width: 350px; height: 120px;" placeholder="Alamat lengkap *" rows="4" ></textarea><?= form_error('alamat_pelapor', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Nomor Telepon *</label>
                                    <input id="form_lastname" type="text" name="no_telp" class="form-control" placeholder="Silahkan masukkan nomor telepon anda *">
                                    <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Alamat Kejadian *</label>
                                    <textarea id="form_message" name="alamat_kejadian" class="form-control" style="width: 350px; height: 120px;" placeholder="Alamat Kejadian *" rows="4" ></textarea><?= form_error('alamat_kejadian', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Foto Kejadian *</label>
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="foto_kejadian" required>
                                        <label class="custom-file-label" for="foto_kejadian" id="foto_kejadian">Choose File</label>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Keterangan *</label>
                                    <textarea id="form_message" name="keterangan" class="form-control" placeholder="Silahkan isi keperluan atau keterangan lainnya disini *" rows="4" ></textarea><?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Salin titik google maps *</label>
                                    <input id="form_name" type="text" name="link_google_maps" class="form-control" placeholder="Silahkan masukkan link google maps tujuan *">
                                    <?= form_error('link_google_maps', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-success btn-send" value="Kirim Permohonan">
                            </div>
                            <div class="col-md-6">
                                <input type="button" class="btn btn-primary btn-send" value="Kembali" onclick="window.history.back()" />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted">
                                    <strong>*</strong> Harus diisi
                                    </p>
                            </div>
                        </div>
                    </div>

                <?= form_close(); ?>

            </div>
            <!-- /.8 -->

        </div>
        <!-- /.row-->

    </div>
    <!-- /.container-->
    </body>
    <script type="text/javascript">
    $('.custom-file-input').on('change', function(){
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    </script>
