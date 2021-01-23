-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 04:43 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dlh`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `image` varchar(128) NOT NULL,
  `text` varchar(128) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `uploadby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `kategori`, `isi`, `image`, `text`, `tanggal`, `uploadby`) VALUES
(1, 'Pencegahan Pencemaran Lingkungan', 'Artikel', '   <p xss=removed>         Ada hubungan sensitif antara lingkungan \r\ndan ekosistem yang berada dalam satu lingkungan tersebut. Apa pun yang \r\nmengganggu keseimbangan alam dapat mengakibatkan bencana yang mungkin \r\nbisa berlangsung selama bertahun-tahun. Salah satu penyebab utama dari \r\npermasalahan di lingkungan adalah pencemaran tanah dan lahan. Tindakan \r\npertama untuk mencegah pencemaran bisa kita mulai dari tempat dimana \r\nkita tinggal hal tersebut merupakan solusi terbaik; Namun, jika suatu \r\ndaerah sudah tercemar, daerah yang rusak harus dibersihkan atau \r\ndipulihkan sehingga tanah dapat sekali lagi bisa digunakan oleh tanaman,\r\n serangga dan hewan.</p>\r\n<p xss=removed><strong>Pencemaran pertambangan</strong></p>\r\n<p xss=removed>Operasi dari industri penambangan besar,\r\n terutama ketika melakukan land cleaning, dapat menciptakan masalah \r\nbesar ketika pekerja menghilangkan tanah asal dan meninggalkan tumpukan \r\nbesar tailing atau limbah di tanah. Proses ini menyebabkan pencemaran \r\nketika asam yang digunakan untuk pencucian bahan dari bijih merembes ke \r\nbawah melalui tanah atau terkumpul di kolam pengendapan. Jika tidak \r\ndirawat, pencemaran ini bisa bertahan selama bertahun-tahun dan \r\nmencemari seluruh area sekitarnya, tetapi daerah pertambangan yang \r\nditinggalkan dapat dikembalikan dengan membersihkan limbah beracun \r\n(berbahaya) dan mengganti tanah lapisan atas dan vegetasi yang hilang</p>\r\n<p xss=removed><strong>Pencemaran Kimia</strong></p>\r\n<p xss=removed>Bahan kimia seperti pestisida atau \r\nherbisida bisa masuk ke tanah ketika digunakan secara berlebihan atau \r\nterbawa ke ladang atau sungai di sekitarnya. Polusi dari bahan kimia ini\r\n bisa dicegah atau diminimalkan dengan mengikuti instruksi penerapan \r\nstandar good manufacturing practice. Bahan kimia lainnya, termasuk cat, \r\npelumas, minyak dan bensin, juga dapat menyebabkan pencemaran tanah dan \r\nlahan. Bensin bisa bocor keluar dari tangki penyimpanan yang ada dibawah\r\n tanah dan mencemari tanah. Untuk mencegah korosi pada tangki \r\npenyimpanan bawah tanah, teknik yang sering digunakan dikenal sebagai \r\nproteksi katodik (cathodic protection). Tangki penyimpanan memiliki \r\nstruktur ionik positif disebut katoda; anoda logam, struktur negatif \r\nion, yang melekat pada tangki sehingga akan menimbulkan korosi dari \r\nmuatan listrik korosif (electrical charges) dalam tanah, bukan dalam \r\ntangki.</p>\r\n<p><strong>Penimbunan Illegal</strong></p>\r\n<p xss=removed>Pencemaran tanah bisa juga disebabkan \r\noleh pembuangan ilegal dari bahan berbahaya atau beracun seperti \r\nmerkuri, suku cadang kendaraan bermotor yang mengandung minyak atau \r\npelumas dan bahkan kayu yang sudah diawetkan dengan bahan seperti \r\nkreosot atau pentoksida arsenik. Untuk mencegah jenis pencemaran ini, \r\nbenda-benda tersebut harus dibuang dengan benar dan tidak ditempatkan di\r\n tempat pembuangan sampah atau dibuang secara ilegal. Tetapi pada tempat\r\n yang telah disetujui atau ditetapkan oleh pemerintah.</p>\r\n<p xss=removed><strong>Metode Pencegahan Lainnya</strong></p>\r\n<p xss=removed>Untuk mencegah pencemaran lahan dan \r\ntanah, bahan kimia rumah tangga seperti pembersih dan oli motor perlu \r\ndidaur ulang di lokasi yang telah disetujui. Untuk mengurangi kebutuhan \r\npestisida atau herbisida, metode alami sebagai alternatif lain dapat \r\ndigunakan. Untuk mengusir siput atau keong, cobalah menyebarkan kawat \r\natau lembaran tembaga di sekitar rumah maupun pabrik; logam akan \r\nbereaksi dengan lendir dari siput atau keong dan memberikan kejutan \r\nringan. Gunakan serangga predator seperti belalang sembah atau kepik \r\nketimbang menggunakan semprotan kimia</p>', 'Green_Nature_Trees_l.jpg', 'Pencegahan_Pencemaran_Lingkungan', '2020-07-29 20:44:48', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `isi` mediumtext NOT NULL,
  `image` varchar(10000) NOT NULL,
  `text` varchar(225) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `uploadby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `kategori`, `isi`, `image`, `text`, `tanggal`, `uploadby`) VALUES
(7, '5 Fakta Kematian Paus di Wakatobi, 5,9 Kg Sampah Plastik di Perut hingga Ancaman Ekosistem Laut', 'Seputar Dinas Lingkungan Hidup', ' Penulis Michael Hangga Wismabrata | Editor Farid Assifa KOMPAS.com - Paus ditemukan mati terdampar di perairan Desa Kapota, Kecamatan Wangiwangi, Wakatobi, Sulawesi Tenggara, pada hari Senin (19/11/2018) lalu. Peneliti menemukan sampah plastik di dalam perut bangkai paus tersebut. Paus sepanjang 9,5 meter dengan perus penuh sampah pun menjadi sorotan media. Kondisi paus jenis Sperm Wale itu pun mengundang keprihatinan para aktivis lingkungan hidup. Berikut ini sejumlah fakta terkait penemuan bangkai paus di Wakatobi. 1. Di perut paus, ada penutup galon hingga bungkus mi instan <br><br><br>5 Fakta Kematian Paus di Wakatobi, 5,9 Kg Sampah Plastik di Perut hingga Ancaman Ekosistem Laut Kompas.com - 22/11/2018, 15:45 WIB BAGIKAN: Komentar Lihat Foto Tim gabungan tengah mengukur panjang bangkai paus di Perairan Wakatobi. Foto istimewa(Bangkai paus yang mati terdampar di perairan Wakatobi diukur petugas gabungan) Penulis Michael Hangga Wismabrata | Editor Farid Assifa KOMPAS.com - Paus ditemukan mati terdampar di perairan Desa Kapota, Kecamatan Wangiwangi, Wakatobi, Sulawesi Tenggara, pada hari Senin (19/11/2018) lalu. Peneliti menemukan sampah plastik di dalam perut bangkai paus tersebut. Paus sepanjang 9,5 meter dengan perus penuh sampah pun menjadi sorotan media. Kondisi paus jenis Sperm Wale itu pun mengundang keprihatinan para aktivis lingkungan hidup. Berikut ini sejumlah fakta terkait penemuan bangkai paus di Wakatobi. 1. Di perut paus, ada penutup galon hingga bungkus mi instan  Lihat Foto Tim gabungan memeriksa bangkai Paus yang terdampar di Pulai Kapota, Wakatobi. Foto : Istimewa(Tim gabungan tengah memeriksa bangkai Paus yang terdampar di Pulau Kapota, Kabupaten Wakatobi) Seekor paus dengan panjang 9,5 meter ditemukan membusuk setelah terdampar di perairan Desa Kapota, Kecamatan Wangiwangi Selatan (Wangsel), Kabupaten Wakatobi, Sulawesi Tenggara (Sultra), Senin (19/11/2018). Bau bangkai paus jenis Sperm Wale itu menyengat dan membuat warga sekitar terganggu. Saleh Hanan, dari Yayasan Wakatobi mengatakan, kemungkinan paus tersebut mati beberapa hari yang lalu. “Beratnya tidak terukur, melihat kondisi yang hancur kira-kira sudah dua minggu paus itu mati,” ungkap Saleh Hanan dihubungi, Senin. Saleh, juga menemukan banyak sampah plastik di dalam perut bangkai paus tersebut. \"Dalam perut paus ditemukan botol, penutup galon, sandal, botol parfum, bungkus mi instan, gelas minuman, tali rafia, karung terpal, kantong kresek, dan lain-lain,\" terangnya. Baca Juga: Seekor Paus 9,5 Meter Ditemukan Mati Terdampar di Perairan Wakatobi 2. Penjelasan penyebab kematian paus di Wakatobi Lihat Foto Plastik yang dimakan paus sperma, termasuk sebuah jeriken.() Saleh Hanan, aktivis dari Yayasan Lestari Alam Wakatobi, menduga, penyebab kematian paus itu karena sampah plastik. Sebab, sampah plastik tak bisa dicerna oleh perut paus. \"Sangat bisa karena sampah. Sampah plastik, kan, tidak terurai di perut paus dan beracun. Pencernaan terganggu, lalu mati,\" kata Saleh, dihubungi, Selasa (20/11/2018). Saleh juga menjelaskan, paus itu kehilangan orientasi navigasi dan menyebabkan mamalia raksasa tersebut makan sampah plastik. Saleh pernah melihat ada sabuk sampah membelah Laut Banda dari Timur Laut Sultra sampai tenggara Kepulauan Sula pada bulan tertentu. \"Karna kehilangan orientasi navigasi, paus tak mampu bedakan makanan dan non-makanan,\" terang dia. Sementara itu, Kartika Sumalong dari WWF, MPA and Biodiversity Officer mengatakan, paus itu dikubur, Selasa (20/11/2018) pagi. Tulangnya dijadikan specimen di Akademi Komunitas Perikanan dan Kelautan Wakatobi. “Sekarang proses pemilahan jenis sampah yang didapat dalam perut. Berat basah sampah plastik 5,9 kilogram, kira-kira penyebab kematiannya apa belum bisa dipastikan, karena ditemukan masyarakat juga sudah dalam keadaan mati dan bagian perut sudah terurai,” katanya. Baca Juga: Ini Dugaan Penyebab Kematian Paus yang Ditemukan di Perairan Wakatobi 3. Menimbulkan bau busuk, warga dan aktivis kubur paus Lihat Foto Ilustrasi: Paus sperma yang terdampar di Pantai Desa Halapaji, Kecamatan Liae, Kabupaten Sabu Raijua, Nusa Tenggara Timur (NTT), Rabu (4/7/2018)(dok. Polres Kupang) Bangkai paus yang mengeluarkan bau busuk menyengat dikubur di pesisir pantai Desa Kapota Utara, Kecamatan Wangi-wangi Selatan, Kabupaten Wakatobi, Sulawesi Tenggara, Selasa (20/11/2018). Bau busuk tersebut sudah menganggu aktivitas warga di sekitar lokasi. Proses penguburuan paus tersebut pun tak mudah. Warga dan aktivitis lingkungan menarik bangkai paus dengan tali dan dimasukkan ke dalam lubang di tepi pantai. \"Saat kami temukan kemarin, kondisi sudah tidak lengkap dan perutnya sudah terurai. Kami tidak bisa menyimpulkan kematian tersebut karena apa,\" ujar Kartika, perwakilan dari WWF. Baca Juga: Paus yang Mati Terdampar di Perairan Wakatobi Dikuburkan 4. Sampah plastik mengancam perairan Wakatobi Lihat Foto Sampah Plastik Dalam Perut Paus Mati Di Wakatobi(KOMPAS.com/Akbar Bhayu Tamtomo) Komunitas Melihat Alam (Kamelia) Wakatobi, menyebut, ekosistem di perairan Wakatobi terancam akibat sampah plastik. Koordinator Kamelia Wakatobi, Hardin, menyebutkan, menjelaskan, Kamelia pernah melakukan aksi bersih di sejumlah pantai di sekitar Wakatobi, mulai dari Kabupaten Kepulauan Tukang Besi hingga Pantai Sembani di Pulau Sambano di Pulai Kaledupa, Wakatobi. Aksi itu dilakukan dengan kolaborasi beberapa lembaga peduli lingkungan dalam aksi Diet Plastik di acara Beach Clean Up pada Maret 2018. Hasilnya, mereka menemukan 1,7 ton sampah plastik berserakan di wilayah pesisir dan pantai sekitar Wakatobi. Mirisnya, laut Wakatobi sudah ditetapkan sebagai Cagar Biosfer Dunia. Bahkan, kata Hardin, sepanjang 2 kilometer perairan laut Waha Raya, Wakatobi, pernah ada yang menyelam di kedalaman 5 hingga 10 meter, dan ditemukan sebanyak 24 kilogram sampah yang didominasi botol plastik, dan ada juga sampah seperti jaring, popok dan toples plastik. \"Kalau dilihat, sampah plastik sudah warna hitam dalam perut paus. Tentunya bukan hanya sampah buangan dari masyarakat Wakatobi. Sebab banyak juga kapal yang melintas di sini juga biasa membuang sampah di laut,\" ungkap Hardin dihubungi, Rabu (21/11/2018). Baca Juga: Teguran buat Kita, Paus yang Mati di Wakatobi Tercemar 5 Kg Plastik 5. Antisipasi sampah plastik di perairan Wakatobi Lihat Foto Para penyelam mengangkat sampah plastik dari dasar Teluk Gorontalo ke permukaan sebelum dibawa ke tempat pengolahan akhir. (KOMPAS.COM/ROSYID AZHAR) Belum adanya lokasi pengolahan sampah, terutama sampah plastik di Pulau Kapota, Kecamatan Wangiwangi, juga menjadi kendala utama masalah sampah plastik. \"Penanganan sampah menjadi penting karena sampah plastik yang terkena sinar matahari, terus menerus terkena ombak dan pasang surut, menyebabkan plastik terdegradasi menjadi partikel-partikel kecil atau mikroplastik yang tertelan oleh fauna laut, mengkontaminasi produk hasil laut yang kita konsumsi,\" jelas Hardin. Pihaknya bersama lembaga lingkungan lain terus mendorong pemangku kebijakan untuk serius menangani sampah, khususnya sampah plastik. Termasuk menyadarkan masyarakat tentang pentingnya memilah sampah organik dan nonorganik. \"Kesadaran itu sudah ada di masyarakat. Mereka sudah pisahkan sampah organik dan nonorganik, tetapi petugas sampah biasa kasih campur,\" ujarnya. Baca Juga: 1,7 Ton Sampah Plastik Ditemukan di Sekitar Laut Tempat Paus Mati Sumber: KOMPAS.com (Kiki Andi Pati, Defriatno Neke)', '1.png', '5_Fakta_Kematian_Paus_di_Wakatobi_5_9_Kg_Sampah_Plastik_di_Perut_hingga_Ancaman_Ekosistem_Laut', '2020-08-13 11:07:24', 'admin'),
(8, 'Repatriasi 91 Satwa Endemik Indonesia dari Filipina', 'Seputar Dinas Lingkungan Hidup', '<p>Direktur Jenderal Penegakan Hukum (Gakkum) Kementerian Lingkungan Hidup dan Kehutanan Rasio Ridho Sani, bersama Walikota Bitung Maximiliaan J. Lomban, dan Kepala BKSDA Sulawesi Utara Noel Layuk Allo menerima kembali pemulangan (repatriasi) 91 individu satwa endemik Indonesia yang terdiri dari reptil, mamalia, dan aves (burung), di Bitung Sulawesi Utara, Kamis (30/07). Satwa-satwa yang sebelumnya diselundupkan ke Filipina tersebut, diberangkatkan dari Davao Filipina 27 Juli 2020 pukul 19.00 waktu Davao dan tiba di Pelabuhan Bitung, Sulawesi Utara, 30 Juli 2020 pukul 06.00 WITA.<br><br>Satwa-satwa tersebut akan diobservasi di Pusat Penyelamatan Satwa (PPS) Tasikoki di Bitung, sampai siap untuk dilepasliarkan kembali ke alam. Selanjutnya Dirjen Gakkum dan Walikota Bitung meninjau Pusat Penyelamatan Satwa Tasikoki untuk proses pemulihan sebelum dilepasliarkan ke habitat alaminya. <br><br>Rasio Sani menyampaikan bahwa inisiasi repatriasi dilakukan oleh Direktur Konservasi Keanekaragaman Hayati (KKH) Direktorat Konservasi Sumber Daya Alam dan Ekosistem (KSDAE) KLHK Indra Exploitasia, yang juga Management Authority (MA) CITES Indonesia. <br><br>“Repatriasi bermula saat Direktur KKH Indra menerima informasi dari MA CITES Filipina tentang adanya satwa yang disita pada tanggal 8 April 2019 dan perlu konfirmasi asal satwa. Hasil identifikasi jenis satwa asal-usul satwa tersebut dari Indonesia wilayah timur antara lain walabi, kasuari dan julang papua,” jelasnya. <br><br>Kemudian repatriasi dapat dilakukan menindaklanjuti Putusan Pengadilan Matic City dimana pada tanggal 14 Oktober 2019 telah memerintahkan Pemerintah Filipina untuk mengembalikan 134 satwa yang masih hidup kepada Pemerintah Indonesia. Sesuai dengan Article VII of the Convention dan Resolusi CITES Conf. 17.8 dan setelah pertemuan bilateral antara MA CITES Indonesia dengan MA CITES Filipina, kedua pihak menyepakati untuk memulangkan satwa liar tersebut ke Indonesia.<br><br>“Keberhasilan repatriasi ini atas kerjasama banyak pihak seperti Ditjen KSDAE KLHK, Kementerian Luar Negeri melalui perwakilan RI di Jenewa, Manila, Davao serta Direktorat Astara, Kementerian Keuangan (Ditjen Bea Cukai), Kementerian Pertanian (Badan Karantina Hewan dan Direktorat kesehatan Hewan), Pemerintah Kota Bitung, dan Yayasan Masarang (PPS Tasikoki),” ungkap Dirjen Gakkum Rasio Sani. <br><br>Rasio Sani mengungkapkan bahwa Repratriasi kali ini merupakan jumlah terbesar yang berhasil dilakukan. Repatriasi atau pengembalian 91 satwa ini menunjukkan bahwa komitmen dan konsistensi pemerintah dalam menyelamatkan kekayaan kehati Indonesia. <br><br>“Kami tidak akan berhenti mengejar pelaku kejahatan perburuan dan perdagangan ilegal tumbuhan dan satwa. Kejahatan perdangan satwa ilegal ini merupakan kejahatan transnational melibatkan aktor linras negara. Untuk itu berbagau kerja sama Internasional kita lakukan, termasuk terkait dengan pemulangan satwa ini,” tegasnya. <br><br>“Pemerintah terus mempelajari berbagai modus operandi perdagangan ilegal satwa ini, termasuk terus memonitor perdagangan melalui online. Kami juga telah bekerjasama dengan berbagai negara untuk menghentikan kejahatan transnasional seperti ini termasuk dengan pihak INTERPOL. Dalam beberapa tahun ini sudah lebih dari 300 kasus kejahatan terhadap tumbuhan dan satwa berhasil ditindak oleh KLHK. Ancaman pelaku kejahatan ini adalah pidana penjara 5 (lima) tahun” tambahnya.<br><br>Mewakili KLHK, Rasio Sani menyampaikan ucapan terimakasih kepada berbagai pihak yang telah mendukung upaya penyelamatan satwa ini, terutama kepada Kementerian Luar Negeri melalui perwakilan RI di Jenewa, Manila, Davao serta Direktorat Astara, Kementerian Keuangan (Ditjen Bea Cukai), Kementerian Pertanian (Badan Karantina Hewan dan Direktorat kesehatan Hewan), Pemerintah Kota Bitung, dan berbagai pihak yang tidak dapat disebutkan satu-per-satu, termasuk dengan Yayasan Masarang (PPS Tasikoki).<br><br><br></p>', '1596205813.jpg', 'Repatriasi_91_Satwa_Endemik_Indonesia_dari_Filipina', '2020-08-13 11:20:09', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` mediumtext NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `uploadby` varchar(20) NOT NULL,
  `text` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `judul`, `isi`, `updated_at`, `uploadby`, `text`, `file`) VALUES
(1, 'Rencana Strategis DLH', ' <p>ABC<br></p>', '2020-12-21 16:20:16', 'Admin', 'rencana_strategis_dlh', ''),
(2, 'Kajian1', ' <p><b>CC<br></b></p>', '2021-01-20 04:50:30', 'Admin', 'kajian', ''),
(3, 'IKLH 2017', '<p>file iklh 2017<br></p>', '2020-12-21 16:21:02', 'Admin', 'iklh_2017', ''),
(4, 'IKLH 2018', ' <p>file iklh 2018<img xss=removed src=\"http://localhost/sistem-dinas/assets/img/img_content/adiwiyata22.jpg\"><br></p>', '2021-01-20 04:53:34', 'Admin', 'iklh_2018', '80JURNAL_NUR_ARIF_HIDAYAT.pdf'),
(5, 'Kepmen LHK NO.23 SK.2020', 'file Kepmen LHK NO.23 SK.2020<br>', '2020-12-21 16:23:45', 'Admin', 'kepmen_lhk_no_23_sk_2020', '');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `judul_image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `image`, `judul_image`) VALUES
(6, '1.jpg', 'Dinas Lingkungan Hidup Sulawesi Tenggara'),
(7, '2.jpg', 'Foto Bersama PLT. Kadis Lingkungan Hidup Provinsi Sulawesi Tenggara');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `isi` mediumtext NOT NULL,
  `image` varchar(128) NOT NULL,
  `text` varchar(128) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `uploadby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `judul`, `kategori`, `isi`, `image`, `text`, `tanggal`, `uploadby`) VALUES
(1, 'UPDATE DATA SEBARAN DISTRIBUSI LOGISTIK Alat Pelindung Diri & PCR TCM', 'Info', ' <p><br></p><p>Kamis, 20 Agustus 2020, <br>dari Dinas Kesehatan Sulawesi Tenggara.<br>Berikut sebaran Logistik Alat Pelindung Diri (APD) yang terdiri dari Baju Cover All Set Lengkap, Baju Cover All, Sarung Tangan Non Steril, Masker Bedah dan Masker N95 serta PCR TCM<br>Untuk sebaran Distribusi APD lebih Detail per Kabupaten/Kota silahkan lihat pada gambar. </p><p><br><b>#satgascovid19 #satgascovid19Sultra #kendari #rapidtest #sultraberantascorona #dirumahaja #dirumahsaja #updatecoronasultra<br>#kendariinfo #kendarihitz #sultrahitz #updateinfo #coronasultra #infocorona</b></p><p><b><br></b></p><p><img xss=\"removed\" src=\"http://localhost/sistem-dinas/assets/img/img_content/21.jpg\"><img xss=\"removed\" src=\"http://localhost/sistem-dinas/assets/img/img_content/31.jpg\"><img xss=\"removed\" src=\"http://localhost/sistem-dinas/assets/img/img_content/41.jpg\"><img xss=\"removed\" src=\"http://localhost/sistem-dinas/assets/img/img_content/51.jpg\"><b><br></b><br></p>', '1.jpg', 'UPDATE_DATA_SEBARAN_DISTRIBUSI_LOGISTIK_Alat_Pelindung_Diri_PCR_TCM', '2020-07-30 09:15:23', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `alias` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `alias`) VALUES
(1, 'Seputar Dinas Lingkungan Hidup', 'DLH'),
(2, 'Artikel', 'artikel'),
(3, 'Info', 'info');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `isi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`isi`) VALUES
('<div align=\"left\">Kantor Dinas Lingkungan Hidup Provinsi Sulawesi Tenggara\r\n</div><p align=\"left\">\r\n<i class=\"fa fa-map-marker fa-2x aria-hidden=\">\r\n</i>Jl. Made Sabara No.6, Mandonga, Kec. Mandonga, Kota Kendari, Sulawesi Tenggara 93461\r\n<br><a href=\"mailto:dlhsultraprov@gmail.com\"><i class=\"fa fa-envelope fa-2x aria-hidden=\"></i> dlhsultraprov@gmail.com</a></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `penataan_dan_penigkatan`
--

CREATE TABLE `penataan_dan_penigkatan` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(128) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `rincian_tugas` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan_online`
--

CREATE TABLE `pengaduan_online` (
  `Id` int(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `alamat_pelapor` varchar(288) NOT NULL,
  `foto_ktp` varchar(128) NOT NULL,
  `no_telp` bigint(30) NOT NULL,
  `foto_kejadian` varchar(128) NOT NULL,
  `alamat_kejadian` varchar(288) NOT NULL,
  `keterangan` varchar(10000) NOT NULL,
  `link_google_maps` varchar(128) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan_online`
--

INSERT INTO `pengaduan_online` (`Id`, `nama_lengkap`, `alamat_pelapor`, `foto_ktp`, `no_telp`, `foto_kejadian`, `alamat_kejadian`, `keterangan`, `link_google_maps`, `date`) VALUES
(5, 'Ryand', 'asdasd567575', '5.jpg', 812812, '4.jpg', 'asasdasa', 'zxzczxc', 'https://goo.gl/maps/GQWVdWNqhSVTt1mR7', ''),
(7, 'Akbar', 'KKP', '2.jpg', 812812, '41.jpg', 'OPEN', 'Kerusakan Lingkungan', 'https://goo.gl/maps/oyUTqqy3fwTs1AjJA', '2020-08-21 18:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `pengendalian_pencemaran`
--

CREATE TABLE `pengendalian_pencemaran` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(128) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `ringkasan_tugas` varchar(10000) NOT NULL,
  `rincian_tugas` mediumtext NOT NULL,
  `wewenang` varchar(10000) NOT NULL,
  `tanggung_jawab` varchar(10000) NOT NULL,
  `hasil_kerja` varchar(10000) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peraturan`
--

CREATE TABLE `peraturan` (
  `judul` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `uploadby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peraturan`
--

INSERT INTO `peraturan` (`judul`, `isi`, `updated_at`, `uploadby`) VALUES
('Peraturan', '<p>p</p><p><br></p>', '2020-08-16 19:21:18', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `prioritas`
--

CREATE TABLE `prioritas` (
  `judul` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `uploadby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prioritas`
--

INSERT INTO `prioritas` (`judul`, `isi`, `updated_at`, `uploadby`) VALUES
('Prioritas', '<p> ab</p><p><br></p>', '2020-07-29 05:32:57', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `judul` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `image` varchar(128) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `uploadby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`judul`, `isi`, `image`, `updated_at`, `uploadby`) VALUES
('Profil', '<p><img xss=removed src=\"http://localhost/sistem-dinas/assets/img/img_content/WhatsApp_Image_2020-07-30_at_00_23_56.jpeg\"><br></p>', 'WhatsApp_Image_2020-07-30_at_00_23_55.jpeg', '2020-08-01 17:03:06', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` mediumtext NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `uploadby` varchar(20) NOT NULL,
  `text` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `judul`, `isi`, `updated_at`, `uploadby`, `text`, `file`) VALUES
(1, 'ADIPURA', '                       <p xss=\"removed\" align=\"justify\"><br></p><p xss=\"removed\" align=\"justify\">       <span xss=\"removed\">Program Adipura merupakan salah satu program strategis Kementerian Lingkungan Hidup dan Kehutanan yang mempunyai maksud dan tujuan untuk mendorong pemerintah daerah dan masyarakat dalam mewujudkan kota yang bersih dan teduh dengan menerapkan prinsip-prinsip Tata Kelola Pemerintahan yang baik (Good Governance) dan Tata Kelola Lingkungan yang baik (Good Environment Governance).</span><br>        <span xss=\"removed\">Program Adipura telah dilaksanakan setiap tahun sejak 1986, kemudian terhenti pada tahun 1998.</span><br><span xss=\"removed\">Dalam lima tahun pertama, program Adipura difokuskan untuk mendorong kotakota di Indonesia menjadi “Kota Bersih dan Teduh”. Program Adipura kembali dicanangkan di Denpasar, Bali pada tanggal 5 Juni 2002, dan berlanjut hingga sekarang. Adapun pengertian dari Adipura adalah sebuah penghargaan bagi kota di Indonesia yang berhasil dalam hal kebersihan serta pengelolaan LH perkotaan dimana adipura ini diselenggarakan oleh Kementerian Lingkungan Hidup dan Kehutanan.</span><br><span xss=\"removed\">         Pengertian kota dalam penilaian Adipura bukanlah kota otonom, namun bisa juga bagian dari wilayah kabupaten yang memiliki karakteristik sebagai daerah perkotaan dengan batas-batas wilayah tertentu. Adipura sebenarnya digunakan sebagai alat untuk mendorong motivasi aparat pemerintah dan masyarakat untuk meperbaiki dan meningkatkan kondisi kebersihan lingkungan di Indonesia.</span></p><p xss=\"removed\" align=\"justify\"><br><span xss=\"removed\">Adapun Tujuan dari pelaksanaan kebersihan kota dan pemberian penghargaan Adipura adalah :</span><br><span xss=\"removed\">1.    </span><span xss=\"removed\">Terciptanya pelaksanaan pengelolaan kebersihan yang berhasil guna dan berdaya guna, yang merupakan hasil proses pengelolaan, pelaksanaan hukum dan pemanfaatan biaya yang tersedia secara optimal serta meningkatnya peran serta masyarakat dalam kebersihan kota;</span><br><span xss=\"removed\">2.   Terciptanya lingkungan perkotaan yang bersih, hijau, teduh, indah dan nyaman;</span><br><span xss=\"removed\">3. Terciptanya pengembangan sistem dalam menentukan alternatif penerapan teknologi tepat guna;</span><br><span xss=\"removed\">4.    Terwujudnya peningkatan pengawasan dan pengendalian pencemaran di perkotaan;</span><br><span xss=\"removed\">5.    Terciptanya koordinasi dan kerjasama antar instansi terkait.</span><br><span xss=\"removed\">       Program Adipura akan terlaksana dengan baik jika ditunjang dengan partisipasi aktif dari seluruh elemen masyarakat dan Pemerintah Daerah dalam pengelolaan lingkungan, kerjasama yang baik antara Pemerintah Daerah, masyarakat dan dinas/instansi terkait sangatlah perlu dibina dan dijalin secara terus menerus dan berkesinambungan, agar lingkungan menjadi baik perlu dukungan dan kesadaran masyarakat untuk berpartisipasi dalam mencapai lingkungan yang bersih dan teduh.</span><br>        <span xss=\"removed\">Peran serta masyarakat sangatlah penting untuk menjaga kebersihan lingkungan. Sebenarnya program Adipura ini tidak hanya menjadi tanggung jawab Pemerintah Daerah dan Dinas/Instansi terkait saja melainkan juga tanggung jawab kita bersama seluruh elemen masyarakat.</span><br><span xss=\"removed\">       Untuk menuju lingkungan yang baik agar program Adipura tercapai maka pengelolaannya pun harus sesuai dengan standar kondisi lingkungan yang ideal. Idealnya kondisi lingkungan yang baik ditunjukkan dengan upaya pembersihan saluran drainase, membersihkan dan menjaga lingkungan sekitar, tidak membuang sampah sembarangan di jalan, sungai dan jembatan, memilah sampah organik dan an organik, penanaman pohon dan pot bunga untuk penghijauan, tidak melakukan pembakaran sampah sesuai dengan Undang-undang No. 18 tentang Pengelolaan Sampah, disebutkan bahwa larangan pembakaran sampah karena dapat mengeluarkan gas beracun yang kemudian pada akhirnya menyebabkan global warming, serta usaha-usaha lain yang bersifat positif dan baik tersebut perlu dijaga dan ditingkatkan lagi secara kontinu sehingga masyarakat menjadi aman dan nyaman dengan lingkungan sekitarnya.</span></p><p xss=\"removed\" align=\"justify\"><span xss=\"removed\"><br></span><br><img xss=\"removed\" src=\"http://localhost/sistem-dinas/assets/img/img_content/adipura.jpg\"><br></p>', '2020-12-28 18:34:12', 'admin', 'adipura', '02_OSK_dan_Org_CPU.pdf'),
(3, 'AMDAL', '                    <p xss=\"removed\" align=\"justify\">       <span xss=\"removed\">Program Adipura merupakan salah satu program strategis Kementerian Lingkungan Hidup dan Kehutanan yang mempunyai maksud dan tujuan untuk mendorong pemerintah daerah dan masyarakat dalam mewujudkan kota yang bersih dan teduh dengan menerapkan prinsip-prinsip Tata Kelola Pemerintahan yang baik (Good Governance) dan Tata Kelola Lingkungan yang baik (Good Environment Governance).</span><br>        <span xss=\"removed\">Program Adipura telah dilaksanakan setiap tahun sejak 1986, kemudian terhenti pada tahun 1998.</span><br><span xss=\"removed\">Dalam lima tahun pertama, program Adipura difokuskan untuk mendorong kotakota di Indonesia menjadi “Kota Bersih dan Teduh”. Program Adipura kembali dicanangkan di Denpasar, Bali pada tanggal 5 Juni 2002, dan berlanjut hingga sekarang. Adapun pengertian dari Adipura adalah sebuah penghargaan bagi kota di Indonesia yang berhasil dalam hal kebersihan serta pengelolaan LH perkotaan dimana adipura ini diselenggarakan oleh Kementerian Lingkungan Hidup dan Kehutanan.</span><br><span xss=\"removed\">         Pengertian kota dalam penilaian Adipura bukanlah kota otonom, namun bisa juga bagian dari wilayah kabupaten yang memiliki karakteristik sebagai daerah perkotaan dengan batas-batas wilayah tertentu. Adipura sebenarnya digunakan sebagai alat untuk mendorong motivasi aparat pemerintah dan masyarakat untuk meperbaiki dan meningkatkan kondisi kebersihan lingkungan di Indonesia.</span></p><p xss=\"removed\" align=\"justify\"><br><span xss=\"removed\">Adapun Tujuan dari pelaksanaan kebersihan kota dan pemberian penghargaan Adipura adalah :</span><br><span xss=\"removed\">1.    </span><span xss=\"removed\">Terciptanya pelaksanaan pengelolaan kebersihan yang berhasil guna dan berdaya guna, yang merupakan hasil proses pengelolaan, pelaksanaan hukum dan pemanfaatan biaya yang tersedia secara optimal serta meningkatnya peran serta masyarakat dalam kebersihan kota;</span><br><span xss=\"removed\">2.   Terciptanya lingkungan perkotaan yang bersih, hijau, teduh, indah dan nyaman;</span><br><span xss=\"removed\">3. Terciptanya pengembangan sistem dalam menentukan alternatif penerapan teknologi tepat guna;</span><br><span xss=\"removed\">4.    Terwujudnya peningkatan pengawasan dan pengendalian pencemaran di perkotaan;</span><br><span xss=\"removed\">5.    Terciptanya koordinasi dan kerjasama antar instansi terkait.</span><br><span xss=\"removed\">       Program Adipura akan terlaksana dengan baik jika ditunjang dengan partisipasi aktif dari seluruh elemen masyarakat dan Pemerintah Daerah dalam pengelolaan lingkungan, kerjasama yang baik antara Pemerintah Daerah, masyarakat dan dinas/instansi terkait sangatlah perlu dibina dan dijalin secara terus menerus dan berkesinambungan, agar lingkungan menjadi baik perlu dukungan dan kesadaran masyarakat untuk berpartisipasi dalam mencapai lingkungan yang bersih dan teduh.</span><br>        <span xss=\"removed\">Peran serta masyarakat sangatlah penting untuk menjaga kebersihan lingkungan. Sebenarnya program Adipura ini tidak hanya menjadi tanggung jawab Pemerintah Daerah dan Dinas/Instansi terkait saja melainkan juga tanggung jawab kita bersama seluruh elemen masyarakat.</span><br><span xss=\"removed\">       Untuk menuju lingkungan yang baik agar program Adipura tercapai maka pengelolaannya pun harus sesuai dengan standar kondisi lingkungan yang ideal. Idealnya kondisi lingkungan yang baik ditunjukkan dengan upaya pembersihan saluran drainase, membersihkan dan menjaga lingkungan sekitar, tidak membuang sampah sembarangan di jalan, sungai dan jembatan, memilah sampah organik dan an organik, penanaman pohon dan pot bunga untuk penghijauan, tidak melakukan pembakaran sampah sesuai dengan Undang-undang No. 18 tentang Pengelolaan Sampah, disebutkan bahwa larangan pembakaran sampah karena dapat mengeluarkan gas beracun yang kemudian pada akhirnya menyebabkan global warming, serta usaha-usaha lain yang bersifat positif dan baik tersebut perlu dijaga dan ditingkatkan lagi secara kontinu sehingga masyarakat menjadi aman dan nyaman dengan lingkungan sekitarnya.</span></p><p xss=\"removed\" align=\"justify\"><span xss=\"removed\"><br></span><br><img xss=\"removed\" src=\"http://localhost/sistem-dinas/assets/img/img_content/adipura.jpg\"><br></p>\r\n<p>\r\n<a href=\"adipura_pdf\">PERMENLHKP_76_2019_ADIPURA</a> | <a href=\"adipura_download\">Download file</a></p>', '2021-01-07 23:36:11', 'admin', 'amdal', 'Vaadin.pdf'),
(4, 'ADIWIYATA', '                  <p xss=\"removed\" align=\"justify\">       <span xss=\"removed\">Program Adipura merupakan salah satu program strategis Kementerian Lingkungan Hidup dan Kehutanan yang mempunyai maksud dan tujuan untuk mendorong pemerintah daerah dan masyarakat dalam mewujudkan kota yang bersih dan teduh dengan menerapkan prinsip-prinsip Tata Kelola Pemerintahan yang baik (Good Governance) dan Tata Kelola Lingkungan yang baik (Good Environment Governance).</span><br>        <span xss=\"removed\">Program Adipura telah dilaksanakan setiap tahun sejak 1986, kemudian terhenti pada tahun 1998.</span><br><span xss=\"removed\">Dalam lima tahun pertama, program Adipura difokuskan untuk mendorong kotakota di Indonesia menjadi “Kota Bersih dan Teduh”. Program Adipura kembali dicanangkan di Denpasar, Bali pada tanggal 5 Juni 2002, dan berlanjut hingga sekarang. Adapun pengertian dari Adipura adalah sebuah penghargaan bagi kota di Indonesia yang berhasil dalam hal kebersihan serta pengelolaan LH perkotaan dimana adipura ini diselenggarakan oleh Kementerian Lingkungan Hidup dan Kehutanan.</span><br><span xss=\"removed\">         Pengertian kota dalam penilaian Adipura bukanlah kota otonom, namun bisa juga bagian dari wilayah kabupaten yang memiliki karakteristik sebagai daerah perkotaan dengan batas-batas wilayah tertentu. Adipura sebenarnya digunakan sebagai alat untuk mendorong motivasi aparat pemerintah dan masyarakat untuk meperbaiki dan meningkatkan kondisi kebersihan lingkungan di Indonesia.</span></p><p xss=\"removed\" align=\"justify\"><br><span xss=\"removed\">Adapun Tujuan dari pelaksanaan kebersihan kota dan pemberian penghargaan Adipura adalah :</span><br><span xss=\"removed\">1.    </span><span xss=\"removed\">Terciptanya pelaksanaan pengelolaan kebersihan yang berhasil guna dan berdaya guna, yang merupakan hasil proses pengelolaan, pelaksanaan hukum dan pemanfaatan biaya yang tersedia secara optimal serta meningkatnya peran serta masyarakat dalam kebersihan kota;</span><br><span xss=\"removed\">2.   Terciptanya lingkungan perkotaan yang bersih, hijau, teduh, indah dan nyaman;</span><br><span xss=\"removed\">3. Terciptanya pengembangan sistem dalam menentukan alternatif penerapan teknologi tepat guna;</span><br><span xss=\"removed\">4.    Terwujudnya peningkatan pengawasan dan pengendalian pencemaran di perkotaan;</span><br><span xss=\"removed\">5.    Terciptanya koordinasi dan kerjasama antar instansi terkait.</span><br><span xss=\"removed\">       Program Adipura akan terlaksana dengan baik jika ditunjang dengan partisipasi aktif dari seluruh elemen masyarakat dan Pemerintah Daerah dalam pengelolaan lingkungan, kerjasama yang baik antara Pemerintah Daerah, masyarakat dan dinas/instansi terkait sangatlah perlu dibina dan dijalin secara terus menerus dan berkesinambungan, agar lingkungan menjadi baik perlu dukungan dan kesadaran masyarakat untuk berpartisipasi dalam mencapai lingkungan yang bersih dan teduh.</span><br>        <span xss=\"removed\">Peran serta masyarakat sangatlah penting untuk menjaga kebersihan lingkungan. Sebenarnya program Adipura ini tidak hanya menjadi tanggung jawab Pemerintah Daerah dan Dinas/Instansi terkait saja melainkan juga tanggung jawab kita bersama seluruh elemen masyarakat.</span><br><span xss=\"removed\">       Untuk menuju lingkungan yang baik agar program Adipura tercapai maka pengelolaannya pun harus sesuai dengan standar kondisi lingkungan yang ideal. Idealnya kondisi lingkungan yang baik ditunjukkan dengan upaya pembersihan saluran drainase, membersihkan dan menjaga lingkungan sekitar, tidak membuang sampah sembarangan di jalan, sungai dan jembatan, memilah sampah organik dan an organik, penanaman pohon dan pot bunga untuk penghijauan, tidak melakukan pembakaran sampah sesuai dengan Undang-undang No. 18 tentang Pengelolaan Sampah, disebutkan bahwa larangan pembakaran sampah karena dapat mengeluarkan gas beracun yang kemudian pada akhirnya menyebabkan global warming, serta usaha-usaha lain yang bersifat positif dan baik tersebut perlu dijaga dan ditingkatkan lagi secara kontinu sehingga masyarakat menjadi aman dan nyaman dengan lingkungan sekitarnya.</span></p><p xss=\"removed\" align=\"justify\"><span xss=\"removed\"><br></span><br><img xss=\"removed\" src=\"http://localhost/sistem-dinas/assets/img/img_content/adipura.jpg\"><br></p>\r\n<p>\r\n<a href=\"adipura_pdf\">PERMENLHKP_76_2019_ADIPURA</a> | <a href=\"adipura_download\">Download file</a></p>', '2020-12-20 18:16:26', 'admin', 'adiwiyata', ''),
(5, 'KLHS', '                  <p xss=\"removed\" align=\"justify\">       <span xss=\"removed\">Program Adipura merupakan salah satu program strategis Kementerian Lingkungan Hidup dan Kehutanan yang mempunyai maksud dan tujuan untuk mendorong pemerintah daerah dan masyarakat dalam mewujudkan kota yang bersih dan teduh dengan menerapkan prinsip-prinsip Tata Kelola Pemerintahan yang baik (Good Governance) dan Tata Kelola Lingkungan yang baik (Good Environment Governance).</span><br>        <span xss=\"removed\">Program Adipura telah dilaksanakan setiap tahun sejak 1986, kemudian terhenti pada tahun 1998.</span><br><span xss=\"removed\">Dalam lima tahun pertama, program Adipura difokuskan untuk mendorong kotakota di Indonesia menjadi “Kota Bersih dan Teduh”. Program Adipura kembali dicanangkan di Denpasar, Bali pada tanggal 5 Juni 2002, dan berlanjut hingga sekarang. Adapun pengertian dari Adipura adalah sebuah penghargaan bagi kota di Indonesia yang berhasil dalam hal kebersihan serta pengelolaan LH perkotaan dimana adipura ini diselenggarakan oleh Kementerian Lingkungan Hidup dan Kehutanan.</span><br><span xss=\"removed\">         Pengertian kota dalam penilaian Adipura bukanlah kota otonom, namun bisa juga bagian dari wilayah kabupaten yang memiliki karakteristik sebagai daerah perkotaan dengan batas-batas wilayah tertentu. Adipura sebenarnya digunakan sebagai alat untuk mendorong motivasi aparat pemerintah dan masyarakat untuk meperbaiki dan meningkatkan kondisi kebersihan lingkungan di Indonesia.</span></p><p xss=\"removed\" align=\"justify\"><br><span xss=\"removed\">Adapun Tujuan dari pelaksanaan kebersihan kota dan pemberian penghargaan Adipura adalah :</span><br><span xss=\"removed\">1.    </span><span xss=\"removed\">Terciptanya pelaksanaan pengelolaan kebersihan yang berhasil guna dan berdaya guna, yang merupakan hasil proses pengelolaan, pelaksanaan hukum dan pemanfaatan biaya yang tersedia secara optimal serta meningkatnya peran serta masyarakat dalam kebersihan kota;</span><br><span xss=\"removed\">2.   Terciptanya lingkungan perkotaan yang bersih, hijau, teduh, indah dan nyaman;</span><br><span xss=\"removed\">3. Terciptanya pengembangan sistem dalam menentukan alternatif penerapan teknologi tepat guna;</span><br><span xss=\"removed\">4.    Terwujudnya peningkatan pengawasan dan pengendalian pencemaran di perkotaan;</span><br><span xss=\"removed\">5.    Terciptanya koordinasi dan kerjasama antar instansi terkait.</span><br><span xss=\"removed\">       Program Adipura akan terlaksana dengan baik jika ditunjang dengan partisipasi aktif dari seluruh elemen masyarakat dan Pemerintah Daerah dalam pengelolaan lingkungan, kerjasama yang baik antara Pemerintah Daerah, masyarakat dan dinas/instansi terkait sangatlah perlu dibina dan dijalin secara terus menerus dan berkesinambungan, agar lingkungan menjadi baik perlu dukungan dan kesadaran masyarakat untuk berpartisipasi dalam mencapai lingkungan yang bersih dan teduh.</span><br>        <span xss=\"removed\">Peran serta masyarakat sangatlah penting untuk menjaga kebersihan lingkungan. Sebenarnya program Adipura ini tidak hanya menjadi tanggung jawab Pemerintah Daerah dan Dinas/Instansi terkait saja melainkan juga tanggung jawab kita bersama seluruh elemen masyarakat.</span><br><span xss=\"removed\">       Untuk menuju lingkungan yang baik agar program Adipura tercapai maka pengelolaannya pun harus sesuai dengan standar kondisi lingkungan yang ideal. Idealnya kondisi lingkungan yang baik ditunjukkan dengan upaya pembersihan saluran drainase, membersihkan dan menjaga lingkungan sekitar, tidak membuang sampah sembarangan di jalan, sungai dan jembatan, memilah sampah organik dan an organik, penanaman pohon dan pot bunga untuk penghijauan, tidak melakukan pembakaran sampah sesuai dengan Undang-undang No. 18 tentang Pengelolaan Sampah, disebutkan bahwa larangan pembakaran sampah karena dapat mengeluarkan gas beracun yang kemudian pada akhirnya menyebabkan global warming, serta usaha-usaha lain yang bersifat positif dan baik tersebut perlu dijaga dan ditingkatkan lagi secara kontinu sehingga masyarakat menjadi aman dan nyaman dengan lingkungan sekitarnya.</span></p><p xss=\"removed\" align=\"justify\"><span xss=\"removed\"><br></span><br><img xss=\"removed\" src=\"http://localhost/sistem-dinas/assets/img/img_content/adipura.jpg\"><br></p>\r\n<p>\r\n<a href=\"adipura_pdf\">PERMENLHKP_76_2019_ADIPURA</a> | <a href=\"adipura_download\">Download file</a></p>', '2020-12-20 18:16:41', 'admin', 'klhs', ''),
(6, 'PROPER', '                  <p xss=\"removed\" align=\"justify\">       <span xss=\"removed\">Program Adipura merupakan salah satu program strategis Kementerian Lingkungan Hidup dan Kehutanan yang mempunyai maksud dan tujuan untuk mendorong pemerintah daerah dan masyarakat dalam mewujudkan kota yang bersih dan teduh dengan menerapkan prinsip-prinsip Tata Kelola Pemerintahan yang baik (Good Governance) dan Tata Kelola Lingkungan yang baik (Good Environment Governance).</span><br>        <span xss=\"removed\">Program Adipura telah dilaksanakan setiap tahun sejak 1986, kemudian terhenti pada tahun 1998.</span><br><span xss=\"removed\">Dalam lima tahun pertama, program Adipura difokuskan untuk mendorong kotakota di Indonesia menjadi “Kota Bersih dan Teduh”. Program Adipura kembali dicanangkan di Denpasar, Bali pada tanggal 5 Juni 2002, dan berlanjut hingga sekarang. Adapun pengertian dari Adipura adalah sebuah penghargaan bagi kota di Indonesia yang berhasil dalam hal kebersihan serta pengelolaan LH perkotaan dimana adipura ini diselenggarakan oleh Kementerian Lingkungan Hidup dan Kehutanan.</span><br><span xss=\"removed\">         Pengertian kota dalam penilaian Adipura bukanlah kota otonom, namun bisa juga bagian dari wilayah kabupaten yang memiliki karakteristik sebagai daerah perkotaan dengan batas-batas wilayah tertentu. Adipura sebenarnya digunakan sebagai alat untuk mendorong motivasi aparat pemerintah dan masyarakat untuk meperbaiki dan meningkatkan kondisi kebersihan lingkungan di Indonesia.</span></p><p xss=\"removed\" align=\"justify\"><br><span xss=\"removed\">Adapun Tujuan dari pelaksanaan kebersihan kota dan pemberian penghargaan Adipura adalah :</span><br><span xss=\"removed\">1.    </span><span xss=\"removed\">Terciptanya pelaksanaan pengelolaan kebersihan yang berhasil guna dan berdaya guna, yang merupakan hasil proses pengelolaan, pelaksanaan hukum dan pemanfaatan biaya yang tersedia secara optimal serta meningkatnya peran serta masyarakat dalam kebersihan kota;</span><br><span xss=\"removed\">2.   Terciptanya lingkungan perkotaan yang bersih, hijau, teduh, indah dan nyaman;</span><br><span xss=\"removed\">3. Terciptanya pengembangan sistem dalam menentukan alternatif penerapan teknologi tepat guna;</span><br><span xss=\"removed\">4.    Terwujudnya peningkatan pengawasan dan pengendalian pencemaran di perkotaan;</span><br><span xss=\"removed\">5.    Terciptanya koordinasi dan kerjasama antar instansi terkait.</span><br><span xss=\"removed\">       Program Adipura akan terlaksana dengan baik jika ditunjang dengan partisipasi aktif dari seluruh elemen masyarakat dan Pemerintah Daerah dalam pengelolaan lingkungan, kerjasama yang baik antara Pemerintah Daerah, masyarakat dan dinas/instansi terkait sangatlah perlu dibina dan dijalin secara terus menerus dan berkesinambungan, agar lingkungan menjadi baik perlu dukungan dan kesadaran masyarakat untuk berpartisipasi dalam mencapai lingkungan yang bersih dan teduh.</span><br>        <span xss=\"removed\">Peran serta masyarakat sangatlah penting untuk menjaga kebersihan lingkungan. Sebenarnya program Adipura ini tidak hanya menjadi tanggung jawab Pemerintah Daerah dan Dinas/Instansi terkait saja melainkan juga tanggung jawab kita bersama seluruh elemen masyarakat.</span><br><span xss=\"removed\">       Untuk menuju lingkungan yang baik agar program Adipura tercapai maka pengelolaannya pun harus sesuai dengan standar kondisi lingkungan yang ideal. Idealnya kondisi lingkungan yang baik ditunjukkan dengan upaya pembersihan saluran drainase, membersihkan dan menjaga lingkungan sekitar, tidak membuang sampah sembarangan di jalan, sungai dan jembatan, memilah sampah organik dan an organik, penanaman pohon dan pot bunga untuk penghijauan, tidak melakukan pembakaran sampah sesuai dengan Undang-undang No. 18 tentang Pengelolaan Sampah, disebutkan bahwa larangan pembakaran sampah karena dapat mengeluarkan gas beracun yang kemudian pada akhirnya menyebabkan global warming, serta usaha-usaha lain yang bersifat positif dan baik tersebut perlu dijaga dan ditingkatkan lagi secara kontinu sehingga masyarakat menjadi aman dan nyaman dengan lingkungan sekitarnya.</span></p><p xss=\"removed\" align=\"justify\"><span xss=\"removed\"><br></span><br><img xss=\"removed\" src=\"http://localhost/sistem-dinas/assets/img/img_content/adipura.jpg\"><br></p>\r\n<p>\r\n<a href=\"adipura_pdf\">PERMENLHKP_76_2019_ADIPURA</a> | <a href=\"adipura_download\">Download file</a></p>', '2020-12-20 18:16:53', 'admin', 'proper', '');

-- --------------------------------------------------------

--
-- Table structure for table `sampah_dan_limbah_b3`
--

CREATE TABLE `sampah_dan_limbah_b3` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(128) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `rincian_tugas` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sekretaris`
--

CREATE TABLE `sekretaris` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(128) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekretaris`
--

INSERT INTO `sekretaris` (`id`, `nama_pegawai`, `nip`, `jabatan`) VALUES
(4, 'Ryand', '19801215 201407 1 001', 'Sekretaris'),
(5, 'Alwi', '122123', 'Kasubag Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `judul` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `image` varchar(128) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `uploadby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`judul`, `isi`, `image`, `updated_at`, `uploadby`) VALUES
('Struktur Organisasi ', '<p><br></p>', 'WhatsApp_Image_2020-07-30_at_00_08_43.jpeg', '2020-08-01 17:01:47', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tata_lingkungan`
--

CREATE TABLE `tata_lingkungan` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(128) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `rincian_tugas` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tupoksi`
--

CREATE TABLE `tupoksi` (
  `judul` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `uploadby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tupoksi`
--

INSERT INTO `tupoksi` (`judul`, `isi`, `updated_at`, `uploadby`) VALUES
('Tupoksi', ' ab', '2020-07-29 06:49:01', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tupoksi_ppdk`
--

CREATE TABLE `tupoksi_ppdk` (
  `judul` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `uploadby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tupoksi_ppdk`
--

INSERT INTO `tupoksi_ppdk` (`judul`, `isi`, `updated_at`, `uploadby`) VALUES
('Tupoksi Pengendalian Pencemaran dan Kerusakan Lingkungan', 'a', '1292819', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tupoksi_ppkl`
--

CREATE TABLE `tupoksi_ppkl` (
  `judul` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `uploadby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tupoksi_ppkl`
--

INSERT INTO `tupoksi_ppkl` (`judul`, `isi`, `updated_at`, `uploadby`) VALUES
('Tupoksi Penaatan dan Peningkatan Kapasitas Lingungan', 'a', '1292819', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tupoksi_sdl`
--

CREATE TABLE `tupoksi_sdl` (
  `judul` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `uploadby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tupoksi_sdl`
--

INSERT INTO `tupoksi_sdl` (`judul`, `isi`, `updated_at`, `uploadby`) VALUES
('Tupoksi Sampah dan Lingkungan B3', 'a', '1292819', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tupoksi_sek`
--

CREATE TABLE `tupoksi_sek` (
  `judul` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `uploadby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tupoksi_sek`
--

INSERT INTO `tupoksi_sek` (`judul`, `isi`, `updated_at`, `uploadby`) VALUES
('Tupoksi Sekretaris', ' ab', '2020-07-29 17:08:41', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tupoksi_ttl`
--

CREATE TABLE `tupoksi_ttl` (
  `judul` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `uploadby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tupoksi_ttl`
--

INSERT INTO `tupoksi_ttl` (`judul`, `isi`, `updated_at`, `uploadby`) VALUES
('Tupoksi Tata Lingkungan', 'a', '1292819', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `upst`
--

CREATE TABLE `upst` (
  `judul` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `uploadby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upst`
--

INSERT INTO `upst` (`judul`, `isi`, `updated_at`, `uploadby`) VALUES
('UPSD Persampahan', '   a', '2020-08-10 05:36:59', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `upt_laboratorium`
--

CREATE TABLE `upt_laboratorium` (
  `judul` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `uploadby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upt_laboratorium`
--

INSERT INTO `upt_laboratorium` (`judul`, `isi`, `updated_at`, `uploadby`) VALUES
('UPT Laboratorium', '<p> ab</p><p><br></p>', '2020-07-29 05:57:15', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'Saitama-kun', 'ryandcoc2@gmail.com', 'ABDUR_RAJAB_SUARHAN.JPG', '$2y$10$FnjCO0BmiKKvb24k7erh4uHfHJ3pQhi6tT.f4r5uDOmASrLE6Lb0.', 1, 1, 1572255841),
(6, 'Muhammad Ryand January', 'ryandkomet@gmail.com', 'Ryand.jpg', '$2y$10$CYb5vHg5QVeV0ocUbSeW/.PiaVn8HHFSfTtpnUfejlwKrLtGclXSW', 2, 1, 1572256119),
(7, 'Muhammad Akbar', 'muhammadakbar20@gmail.com', 'ABDUR_RAJAB_SUARHAN.JPG', '$2y$10$K3rgCCUIkDLWPG9begrz9OKNVO5czgPN5MjqIneecqKU0YMXY.MCy', 2, 1, 1572265171);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 1, 3),
(4, 1, 2),
(11, 3, 4),
(15, 1, 4),
(16, 2, 5),
(19, 1, 8),
(20, 1, 9),
(21, 1, 10),
(22, 1, 11),
(23, 1, 7),
(24, 1, 12),
(25, 1, 13),
(26, 1, 14),
(27, 1, 15),
(28, 1, 16),
(29, 1, 6),
(30, 1, 17),
(31, 1, 18),
(32, 1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(6, 'Sekretaris'),
(7, 'Tata Lingkungan'),
(8, 'Pengendalian Pencemaran dan Kerusakan Ling'),
(9, 'Penaatan dan Peningkatan Kapasitas Ling'),
(10, 'Sampah dan Limbah B3'),
(14, 'Post'),
(15, 'Member'),
(16, 'Laporan Masyarakat'),
(18, 'Program'),
(19, 'Data');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Administrator', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profil', 'user', 'fas fa-fw fa-user-tie', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(6, 1, 'Role', 'admin/role', 'fas fa-fw fa-user', 1),
(7, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(8, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(40, 6, 'Pegawai', 'Pegawai/sekretaris', 'fas fa-fw fa-user', 1),
(41, 7, 'Pegawai', 'Pegawai/tata_lingkungan', 'fas fa-fw fa-user', 1),
(42, 8, 'Pegawai', 'Pegawai/pengendalian', 'fas fa-fw fa-user', 1),
(43, 9, 'Pegawai', 'Pegawai/penataan', 'fas fa-fw fa-user', 1),
(44, 10, 'Pegawai', 'Pegawai/sampah', 'fas fa-fw fa-user', 1),
(46, 13, 'List Berita', 'berita/berita_terbaru', 'fas fa-fw fa-newspaper-o', 1),
(47, 14, 'Berita ', 'Berita/data_berita', 'fas fa-fw fa-newspaper', 1),
(48, 14, 'Profil', 'Berita/data_profil', 'fas fa-fw fa-newspaper', 1),
(49, 14, 'Visi dan Misi', 'Berita/data_visi_misi', 'fas fa-fw fa-newspaper', 1),
(50, 14, 'Struktur Organisasi', 'Berita/data_struktur_organisasi', 'fas fa-fw fa-newspaper', 1),
(51, 14, 'Galeri', 'Berita/data_galeri', 'fas fa-fw fa-newspaper', 1),
(52, 14, 'Kategori', 'berita/data_kategori', 'fas fa-fw fa-newspaper', 1),
(53, 15, 'Home', 'Konten/home', 'fas fa-fw fa-newspaper', 1),
(54, 6, 'Tupoksi', 'pegawai/tupoksi_sek', 'fas fa-fw fa-newspaper', 1),
(55, 7, 'Tupoksi', 'pegawai/tupoksi_ttl', 'fas fa-fw fa-newspaper', 1),
(56, 8, 'Tupoksi', 'pegawai/tupoksi_ppdk', 'fas fa-fw fa-newspaper', 1),
(57, 9, 'Tupoksi', 'pegawai/tupoksi_ppkl', 'fas fa-fw fa-newspaper', 1),
(58, 10, 'Tupoksi', 'pegawai/tupoksi_sdl', 'fas fa-fw fa-newspaper', 1),
(59, 16, 'Pengaduan Online', 'berita/pengaduan', 'fas fa-fw fa-newspaper', 1),
(60, 14, 'Prioritas', 'berita/data_prioritas', 'fas fa-fw fa-newspaper', 1),
(61, 14, 'UPTD Persampahan', 'berita/data_upst', 'fas fa-fw fa-newspaper', 1),
(63, 14, 'UPT Laboratorium', 'berita/data_upt_laboratorium', 'fas fa-fw fa-newspaper', 1),
(66, 14, 'Peraturan', 'berita/data_peraturan', 'fas fa-fw fa-newspaper', 1),
(67, 14, 'Kontak', 'berita/data_kontak', 'fas fa-fw fa-newspaper', 1),
(68, 14, 'Tupoksi', 'berita/data_tupoksi', 'fas fa-fw fa-newspaper', 1),
(69, 14, 'Artikel', 'berita/data_artikel', 'fas fa-fw fa-newspaper', 1),
(70, 14, 'Info', 'berita/data_info', 'fas fa-fw fa-newspaper', 1),
(82, 18, 'Program Kerja', 'berita/program', 'fas fa-fw fa-newspaper', 1),
(83, 19, 'Data', 'berita/data', 'fas fa-fw fa-newspaper', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `Id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `judul` varchar(128) NOT NULL,
  `isi` mediumtext NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `uploadby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`judul`, `isi`, `updated_at`, `uploadby`) VALUES
('Visi dan Misi', '<div align=\"justify\">    Penelaahan visi,misi dan program Kepala Daerah dan Wakil Kepala Daerah ditujukan untuk memahami arah pembangunan yang akan dilaksanakan selama kepemimpinan Kepala Daerah dan Wakil Kepala Daerah dan untuk mengidentifikasi faktor-faktor penghambat dan pendorong pelayanan Dinas Lingkungan Hidup Provinsi Sulawesi Tenggara yang dapat mempengaruhi pencapaian visi dan misi Kepala Daerah dan Wakil Kepala Daerah tersebut. Sebagaimana tertuang dalam dokumen RPJMD, visi Gubernur Sulawesi Tenggara Tahun 2018-2023, yaitu: “Terwujudnya Sulawesi Tenggara yang Aman, Maju, Sejahtera dan Bermartabat”. Perwujudan visi tersebut diatas dituangkan melalui 4 (empat) misi yang digunakan untuk memberikan arah sekaligus batasan proses pencapaian tujuan. Adapun empat misi pembangunan Sulawesi Tenggara adalah sebagai berikut:<br>1.    Meningkatkan kualitas hidup masyarakat agar dapat berdaulat dan aman dalam bidang ekonomi, pangan, pendidikan, kesehatan, lingkungan, politik, serta iman dan taqwa;<br>2.    Memajukan daya saing wilayah melalui penguatan ekonomi lokal dan peningkatan investasi;<br>3.    Mendorong birokrasi pemerintahan provinsi yang moderen, tata kelola pemerintahan desa yang baik (good village governance) serta memberikan bantuan kepada kecamatan dan kelurahan sebagai pusat pelayanan pemerintahan;<br>4.    Meningkatkan konektivitas dan kemitraan antar pemerintah, swasta dan masyarakat dalam rangka peningkatan daya saing daerah melalui pembangunan dan perbaikan infrastruktur dan aspek-aspek sosial ekonomi.<br>Visi dan misi tersebut di atas mengindikasikan bahwa arah pembangunan Provinsi Sulawesi Tenggara selama 5 (lima) tahun ke depan sudah menitik beratkan pada peningkatan nilai tambah produksi dalam upaya meningkatkan kesejahteraan masyarakat dan daya saing daerah. Untuk mencapai arah pembangunan tersebut, maka ditempuh strategi yang disebut Gerakan Pembangunan Terpadu Wilayah Daratan dan Kepulauan dengan akronim GARBARATA, yaitu : (1) pembangunan pusat-pusat pertumbuhan, (2) pengembangan konektivitas antar wilayah, (3) keberpihakan kepada masyarakat miskin dan kelompok marjinal lainnya, (4) penguatan sumberdaya manusia dan pangarusutamaan gender, serta (5) pelestarian sumber daya alam.<br>Dalam upaya pencapaian visi dan misi tersebut, Kepala Daerah dan Wakil Kepala Daerah Terpilih Sulawesi Tenggara Tahun 2018-2023 juga meluncurkan program dan kegiatan prioritas daerah yang diberi akronim SULTRA EMAS. Dari berbagai program dan kegiatan tersebut, teridentifikasi beberapa program dan kegiatan yang dapat menjadi faktor penghambat dan pendorong pelayanan Dinas Lingkungan Hidup Provinsi Sulawesi Tenggara, sebagai berikut :<br>1.    Program dan kegiatan Sultra Berbudaya dan Beriman, antara lain :<br>a.    Penataan taman modern hijau Tugu Persatuan;<br>b.    Penyediaan sarana dan prasarana budaya;<br>c.    Revitalisasi situs budaya;<br>d.    Revitalisasi P2ID;<br>e.    Fasilitasi pembentukan DOB.<br>2.    Sultra Cerdas, antara lain :<br>a.    Pembangunan sekolah baru SMU dan SMK;<br>b.    Penambahan RKB SMU dan SMK;<br>c.    Pengembangan Sekolah Satu Atap;<br>d.    Pembangunan Laboratorium IPA dan Komputer;<br>e.    Pembangunan Perpustakaan bertaraf internasional;<br>f.    Peningkatan sarana dan prasarana asrama mahasiswa;<br>g.    Perbaikan tata kelola pendidikan;<br>3.    Sultra Sehat, antara lain :<br>a.    Pembangunan Rumah Sakit Jantung;<br>b.    Peningkatan fasilitas dan pelayanan RSJ;<br>c.    Pembangunan prototype puskesmas modern;<br>d.    Pembangunan RTH;<br>e.    Peningkatan sarana dan prasarana olah raga.<br>4.    Sultra Produktif, antara lain :<br>a.    Peningkatan produksi dan produktivitas pertanian;<br>b.    Pengembangan pertanian organik;<br>c.    Peningkatan produksi dan produktivitas perikanan;<br>d.    Pengadaan Saprodi (pupuk dan obat-obatan serta alat dan mesin pertanian);<br>e.    Pembangunan dan peningkatan jalan, jembatan dan pelabuhan;<br>f.    Pemberdayaan masyarakat melalui pengembangan hutan tanaman rakyat (HTR) dan hutan rakyat (HR);<br>g.    Normalisasi Sungai Wanggu;<br>h.    Pembangunan dan peningkatan Irigasi;<br>i.    Pembangunan dan peningkatan infrastruktur Perekonomian;<br>j.    Dukungan investasi sektor pertambangan dan Industri;<br>k.    Penambahan sarana transportasi darat dan Laut;<br>l.    Dukungan terhadap investasi sektor pertambangan dan industri;<br>m.    Pengembangan destinasi wisata;<br>n.    Pemaketan destinasi wisata;<br>o.    Konservasi DAS dan daerah-daerah tangkapan air;<br>p.    Perlindungan terhadap satwa endemik;<br>q.    Dukungan terhadap pengembangan energi baru dan terbarukan;<br>r.    Perencanaan pembangunan resiko bencana rendah karbon;<br>s.    Revitalisasi Teluk Kendari.<br>5.    Sultra Bantuan Masyarakat Miskin, antara lain :<br>a.    Bantuan perbaikan rumah tidak layak huni;<br>Dalam upaya pencapaian visi, misi serta program dan kegiatan prioritas tersebut, maka Dinas Lingkungan Hidup Provinsi Sulawesi Tenggara dapat memberikan kontribusi melalui pencapaian misi 1, yaitu meningkatkan kualitas hidup masyarakat agar dapat berdaulat dan aman dalam bidang ekonomi, pangan, pendidikan, kesehatan, lingkungan, politik, serta iman dan taqwa. Misi tersebut bertujuan meningkatkan kondisi aman pada berbagai aspek kehidupan dalam mewujudkan kualitas hidup masyarakat yang baik. Selanjutnya, dalam RPJMD Provinsi Sulawesi Tenggara Tahun 2018-2023, tujuan tersebut diuraikan menjadi beberapa sasaran. Ada 2 (dua) sasaran yang terkait dengan pelayanan Dinas Lingkungan Hidup Provinsi Sulawesi Tenggara, yaitu : <br>1.    Sasaran ke 5, yakni : terpeliharanya kondisi aman dalam daya dukung dan daya tampung lingkungan untuk keberlanjutan kehidupan masyarakat;<br>2.    Sasaran ke 8, yakni : memerangi perubahan iklim dan dampaknya. <br>Untuk lebih jelasnya, penjabaran visi dan misi tersebut diuraikan pada tabel di bawah ini.<br>Tabel 3.2. Misi,Tujuan, dan Sasaran Kepala Daerah dan Wakil Kepala Daerah Sulawesi Tenggara Tahun 2018-2023 yang Terkait Pelayanan Dinas Lingkungan Hidup Provinsi Sulawesi Tenggara<br>Visi : Terwujudnya Sulawesi Tenggara yang Aman, Maju, Sejahtera dan Bermartabat<br>Misi    Tujuan    Sasaran    Indikator sasaran<br>Misi1:<br>Meningkatkan kualitas hidup masyarakat agar dapat berdaulat dan aman dalam bidang ekonomi, pangan, pendidikan, kesehatan, lingkungan, politik, serta iman dan taqwa    Tujuan 1 : Meningkatkan kondisi aman pada berbagai aspek kehidupan dalam mewujudkan kualitas hidup masyarakat yang baik    Sasaran 5 : Terpeliharanya kondisi aman dalam daya dukung dan daya tampung lingkungan untuk keberlanjutan kehidupan masyarakat    <br>Indeks kualitas lingkungan hidup (IKLH) provinsi<br><br><br>        Sasaran 8 :<br>Memerangi perubahan iklim dan dampaknya    Persentase kabupaten/kota yang tangguh bencana<br>Dalam mengimplementasikan visi, misi, tujuan, sasaran serta program dan kegiatan prioritas kepala daerah dan wakil kepala daerah terpilihsebagaimana diuraikan di atas, Dinas Lingkungan Hidup Provinsi Sulawesi Tenggara dapat memberikan kontribusi melalui pelaksanaan tugas dan fungsi organisasi yangmengarah pada upaya pencapaian indikator sasaran kepala daerah, yaitu  : (1) tercapainya indeks kualitas lingkungan hidup (IKLH) provinsi pada kisaran 70,95 sampai 72,50 pada Tahun 2019-2023, dan (2) persentase kabupaten/kota yang tangguh bencana sebesar 100% sampai Tahun 2023. Upaya pencapaian indikator tersebut sekaligus untuk menyelesaikan tiga masalah pokok sebagaimana diuraikan sebelumnya, yaitu  : <br>1.    Kapasitas daerah dalam perlindungan dan pengelolaan lingkungan hidup rendah, upaya peningkatannya melalui pelaksanaan tugas dan fungsi Sekretariat serta Bidang Penaatan dan Peningkatan Kapasitas;<br>2.    Penurunan kualitas lingkungan hidup daerah, upaya peningkatannya melalui pelaksanaan  tugas dan fungsi bidang Tata Lingkungan, Bidang Pengelolaan Sampah,Bidang Pengendalian Pencemaran dan Kerusakan Lingkungan, UPTD Laboratorium Lingkungan, serta UPTD Persampahan;<br>3.    Perubahan iklim, upaya penanggulangannya melalui pelaksanaan  tugas dan fungsi bidang Tata Lingkungan.<br>Dalam upaya pencapaian indikator sasaran tersebut di atas yang terimplementasikan dalam pelaksanaan pelayanan Dinas Lingkungan Hidup Provinsi Sulawesi Tenggara, diperkirakan terdapat beberapa faktor penghambat dan pendorong, yang dapat diuraikan sebagai berikut :<br>1.    Faktor penghambat<br>a.    Keterbatasan SDM dalam perlindungan dan pengelolaan lingkungan hidup;<br>b.    Keterbatasan sarana perlindungan dan pengelolaan lingkungan hidup;<br>c.    Pencemaran dan kerusakan lingkungan hidup;<br>d.    Perubahan iklim.<br>2.    Faktor pendorong<br>a.    Visi, misi, tujuan, dan sasaran pembangunan daerah yang mendukung;<br>b.    Tugas dan fungsi Dinas Lingkungan Hidup Provinsi Sulawesi Tenggara yang mendukung;<br>c.    Isu lingkungan hidup yang menjadi perhatian dunia internasional.<br>3.1.    Telaah Renstra Kementerian Lingkungan Hidup dan Kehutanan dan Renstra Dinas Lingkungan Hidup Kabupaten/Kota<br>Secara umum, permasalahan lingkungan hidup dan kehutanan Indonesia yang diuraikan dalam Renstra Kementerian Lingkungan Hidup dan Kehutanan Tahun 2015-2019 adalah tata kelola, penyelesaian konflik, semakin menurunnya kondisi lingkungan, serta pentingnya sumberdaya pendukung pemenuhan pangan,energi dan obat-obatan. Kondisi lingkungan hidup dan kehutanan terkini juga didekati dari anasir udara, kualitas air,hutan dan lahan, pesisir dan lautan, dan keanekaragaman hayati, yang secara ringkas diuraikan sebagai berikut :<br>1.    Masalah kualitas udara mencakup : peningkatan pencemaran udara terutama NO2, SO2 dan CO2, yang sumbangan terbesarnya dari kendaraan bermotor (mencapai 50%). Resikolainnya adalah particulate matter (PM),yang terdiri dari sulfat, nitrat, klorida, karbon, debu mineral  dan air, yang berisiko kepada asma dan infeksi saluran pernafasan (ISPA);<br>2.    Kualitasair sungai yang semakin menurun terutama di Pulau Jawa dan Sumatera, yang disebabkan pencemaran air oleh limbah domestik, antara lain parameter Chemical Oxygen Demand (COD) disebagian provinsi di Indonesia melebihi baku mutu;<br>3.    Permasalahan lingkungan yang dihadapi oleh hutan dan lahan mencakup deforestasi, kebakaran,dan lahan kritis. Luas tutupan hutan di Indonesia sebesar 104 juta ha ditahun 2000 menjadi 98 juta ha ditahun 2011. Dengan demikian, total areal mengalami deforestasi seluas 6,5 juta ha selama rentang 11tahun. Laju penurunan luasan mencapai lebih dari 1% /tahun;<br>4.    Sekitar 5,30% terumbu karang dalam kondisi sangat baik ; 27,19?lam keadaan baik ; 37,25% cukup baik dan 30,45% kurang baik. Tingginya detergen atau methylene blue active subtance (MBAS) yang ditemukan menunjukkan bahwa polutan dari limbah domestik tersebut langsung dibuangke wilayah sungai atau perairan berakibat pada pencemaran perairan laut;<br>5.    Berdasarkan data Internasional Union Conservation Natura (IUCN), untuk satwa ada 2 spesies berkategori punah, 66 spesies berkategori kritis, dan167 spesies kondisi genting. Untuk tumbuhan,1 spesies punah, 2 spesies punahin situ,115 spesies kritis,dan 72 spesies berstatus genting.<br>Kementerian Lingkungan Hidup dan Kehutanan merumuskan tujuan pembangunan Tahun 2015-2019, yaitu memastikan kondisi lingkungan berada pada toleransi yang dibutuhkan untuk kehidupan manusia dan sumberdaya berada rentang populasi yang aman, serta  secara parallel meningkatkan kemampuan sumberdaya alam untuk memberikan sumbangan bagi perekonomian nasional. Berdasarkan tujuan pembangunan tersebut, peran utama Kementerian Lingkungan Hidup dan Kehutanan Tahun 2015-2019 yang akan diusung, adalah:<br>1.    Menjaga kualitas lingkungan hidup yang memberikan daya dukung, pengendalian pencemaran, pengelolaan daerah aliran sungai, keanekaragaman hayati serta pengendalian perubahan iklim;<br>2.    Menjaga luasan dan fungsi hutan untuk menopang kehidupan,menyediakan hutan untuk  kegiatan sosial ekonomi rakyat,dan menjaga jumlah dan jenis flora dan fauna serta endangered species;<br>3.    Memelihara kualitas lingkungan hidup, menjaga hutan, dan merawat keseimbangan ekosistem dan keberadaan sumberdaya.<br>Selanjutnya, sasaran strategis yang menjadi panduan dan mendorong arsitektur kinerja Kementerian Lingkungan Hidup dan Kehutanan Tahun 2015-2019 dirumuskan sebagai berikut :<br>1.    Menjaga kualitas lingkungan hidup untuk meningkatkan daya dukung lingkungan, ketahanan air dan kesehatan masyarakat, dengan indikato rkinerja Indeks Kualitas Lingkungan Hidup (IKLH) berada pada kisaran 66,5 - 68,6, angka pada tahun 2014 sebesar 63,42. Anasir utama pembangun dari besarnya indeks ini yang akan ditangani, yaitu air,udara dan tutupan hutan;<br>2.    Memanfaatkan potensi sumber daya hutan dan lingkungan hutan secara lestari untuk meningkatkan ekonomi dan kesejahteraan masyarakat yang berkeadilan, dengan indikator kinerja peningkatan kontribusi sumberdaya alam dan lingkungan hidup terhadap devisa dan PNBP. Komponen pengungkit yang akan ditangani yaitu produksi hasil hutan, baik kayu  maupun non kayu (termasuk tumbuhan dan satwaliar) dan eksport;<br>3.    Melestarikan keseimbangan ekosistem dan keanekaragaman hayati serta keberadaan sumberdaya alam sebagai sistem penyangga  kehidupan untuk mendukung pembangunan berkelanjutan, dengan indicator kinerja derajat keberfungsian ekosistem meningkat setiap tahun.<br>Di samping Renstra Kementerian Lingkungan Hidup dan Kehutanan, dalam penyusunan Ranstra ini juga dilakukan telaahan terhadap Renstra Dinas Lingkungan Hidup Kabupaten dan Kota se Provinsi Sulawesi Tenggara. Seperti halnya Kementerian Lingkungan Hidup dan Kehutanan, telaah terhadap Renstra Dinas Lingkungan Hidup kabupaten/kota juga difokuskan pada upaya pencapaian IKLH, dalam hal ini IKLH kabupaten/kota. Hasil komparasi antara sasaran yang akan dicapai oleh Dinas Lingkungan Hidup Provinsi Sulawesi Tenggara, Kementerian Lingkungan Hidup dan Kehutanan, serta Dinas Lingkungan Hidup Kabupaten/Kota diuraikan pada tabel dibawah ini.<br>Tabel 3.3. Komparasi Sasaran Renstra Dinas Lingkungan Hidup Provinsi Sulawesi Tenggara,  Renstra Kementerian Lingkungan Hidup dan Kehutanan, serta Sasaran Renstra Dinas Lingkungan Hidup Kabupaten/Kota se Provinsi Sulawesi Tenggara<br>No    Indikator Kinerja Sasaran    Target Renstra DLH  Sultra 2018-2023    Target Renstra DLH<br>Kabupaten/Kota    Target Renstra KLHK 2015-2019<br>(1)    (2)    (3)    (4)    (5)<br>1    Indeks Kualitas Lingkungan Hidup (IKLH)    70,9  - 72,5    70<iklh>2    Persentase kabupaten/kota yang tangguh bencana    100%    100%    -</iklh><br><iklh>Sumber : Hasil Analisis, 2018</iklh><br><iklh>Hasil komparasi pada tabel diatas menunjukkan bahwa untuk menyelaraskan upaya peningkatan kualitas lingkungan hidup daerah yang dilakukan oleh Dinas Lingkungan Hidup Kabupaten/Kota, Dinas Lingkungan Hidup Provinsi Sulawesi Tenggara, serta Kementerian Lingkungan Hidup dan Kehutanan terdapat 1 (satu) indikator sasaran yang digunakan sebagai ukuran keberhasilan peningkatan kualitas lingkungan hidup, yaitu indeks kualitas lingkungan hidup (IKLH).</iklh><br><iklh>IKLH dapat digunakan untuk menilai kinerja program perbaikan kualitas lingkungan hidup, serta dapat digunakan sebagai bahan informasi dalam mendukung proses pengambilan kebijakan yang berkaitan dengan perlindungan dan pengelolaan lingkungan hidup. Nilai IKLH merupakan indeks kinerja pengelolaan lingkungan hidup, yang dihitung dari indeks kualitas air (IKA), indeks kualitas udara (IKU), dan indeks tutupan lahan (ITL), dengan formula sebagai berikut : </iklh><br><iklh>IKLH = (30% x IKA) + (30% x IKU) + (40% x ITL)</iklh><br><iklh>Dari hasil telaahan tersebut di atas, maka dari sisi pencapaian indikator sasaran Renstra Kementerian Lingkungan Hidup dan Kehutanan serta Renstra Kabupaten/Kota terdapat berbagai factor pendorong dan penghambat yang dapat mempengaruhi kinerja pelayanan Dinas Lingkungan Hidup Provinsi Sulawesi Tenggara ke depan. Faktor-faktor penghambat dan pendorong tersebut diantaranya adalah sebagai berikut :</iklh><br><iklh>1.    Faktor penghambat</iklh><br><iklh>a.    Belum adanya RPPLH Provinsi Sulawesi Tenggara;</iklh><br><iklh>b.    Minimnya sumberdaya aparatur yang memiliki kompetensi serta prasarana dan sarana untuk melakukan pengawasan izin lingkungan;</iklh><br><iklh>c.    Minimnya prasarana dan sarana dalam pelaksanaan perlindungan dan pengelolaan lingkungan hidup;</iklh><br><iklh>3.    Faktor pendorong</iklh><br><iklh>a.    Adanya UU No. 32 Tahun 2009 tentang PPLH;</iklh><br><iklh>b.    Adanya Peraturan Daerahdan kebijakan pembangunan daerah yang berwawasan lingkungan;</iklh><br><iklh>c.    Penetapan IKLH sebagai indikator sasaran RPJMD Sulawesi Tenggara Tahun 2018-2023.</iklh><br><iklh></iklh><br><iklh></iklh></div>', '2020-08-20 11:04:29', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penataan_dan_penigkatan`
--
ALTER TABLE `penataan_dan_penigkatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan_online`
--
ALTER TABLE `pengaduan_online`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pengendalian_pencemaran`
--
ALTER TABLE `pengendalian_pencemaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sampah_dan_limbah_b3`
--
ALTER TABLE `sampah_dan_limbah_b3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekretaris`
--
ALTER TABLE `sekretaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tata_lingkungan`
--
ALTER TABLE `tata_lingkungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penataan_dan_penigkatan`
--
ALTER TABLE `penataan_dan_penigkatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengaduan_online`
--
ALTER TABLE `pengaduan_online`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengendalian_pencemaran`
--
ALTER TABLE `pengendalian_pencemaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sampah_dan_limbah_b3`
--
ALTER TABLE `sampah_dan_limbah_b3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekretaris`
--
ALTER TABLE `sekretaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tata_lingkungan`
--
ALTER TABLE `tata_lingkungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
