<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?= $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png'); ?>">
<link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/template/assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/template/assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/template/assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/template/assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/template/assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/template/assets/css/jquery.bxslider.css" media="screen" />
</head>
<body>
<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo"><center><a href="<?= base_url('konten/home'); ?>"><img width="140px" height="140px" src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo dinas lingkungan hidup sulawesi tenggara" /></a></center></div>
    </div>
    <div class="main_menu_area">
      <ul id="nav">
        <li><a href="<?= base_url('konten/profil'); ?>">Profil</a></li>
        <li><a href="">Tentang Kami</a>
          <ul>
            <li><a href="<?= base_url('konten/tupoksi'); ?>">Tupoksi</a></li>
            <li><a href="<?= base_url('konten/struktur_organisasi'); ?>">Struktur Organisasi</a></li>
            <li><a href="<?= base_url('konten/visi_dan_misi'); ?>">Visi dan Misi</a></li>
          </ul>
        </li>
        <li><a href="<?= base_url('konten/home');?>">Program</a>
          <ul>
            <?php foreach ($program as $p) { ?>
            <li><a href="<?= base_url('konten/program/'.$p['text']); ?>"><?= $p['judul']; ?></a></li>
            <?php } ?>
          </ul>
        </li>
        <li><a href="<?= base_url('konten/home');?>">Bidang/SUDIN/UPT</a>
          <ul>
            <li><a href="<?= base_url('konten/sekretaris'); ?>">Sekretaris</a></li>
            <li><a href="<?= base_url('konten/tata_lingkungan'); ?>">Tata Lingkungan</a></li>
            <li><a href="<?= base_url('konten/pengendalian_pencemaran_dan_kerusakan_lingkungan'); ?>">Pengendalian Pencemaran dan Kerusakan Lingkungan</a></li>
            <li><a href="<?= base_url('konten/penaatan_dan_peningkatan_kapasitas_lingkungan'); ?>">Penaatan dan Peningkatan Kapasitas Lingkungan</a></li>
            <li><a href="<?= base_url('konten/sampah_dan_limbah_b3'); ?>">Sampah dan Limbah B3</a></li>
            <li><a href="<?= base_url('konten/upst'); ?>">UPTD Persampahan</a></li>
            <li><a href="<?= base_url('konten/upt_laboratorium'); ?>">UPT Laboratorium</a></li>
          </ul>
        </li>
        <li><a href="<?= base_url('konten/home');?>">Data</a>
          <ul>
            <?php foreach ($data as $d) { ?>
            <li><a href="<?= base_url('konten/data/'.$d['text']); ?>"><?= $d['judul']; ?></a></li>
            <?php } ?>
          </ul>
        </li>
        <li><a href="<?= base_url('konten/home');?>">Kategori</a>
          <ul>
            <li><a href="<?= base_url('konten/seputar_dlh'); ?>">Seputar DLH</a></li>
            <li><a href="<?= base_url('konten/artikel'); ?>">Artikel</a></li>           
            <li><a href="<?= base_url('konten/info'); ?>">Info</a></li>
          </ul>
        </li>
        <li><a href="<?= base_url('konten/galeri'); ?>">Galeri</a></li>
        <li><a href="<?= base_url('konten/peraturan'); ?>">Peraturan</a></li>
        <li><a href="<?= base_url('konten/home');?>">Pelayanan</a>
          <ul>
            <li><a href="<?= base_url('konten/layanan_pengaduan'); ?>">Layanan Pengaduan</a></li>
          </ul>
        </li>
      </ul>
    </div>