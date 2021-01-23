<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'menu');
		$this->load->model('Konten_model', 'konten');
	}

	
	public function Home()
	{
		$data['title'] = 'Dinas Lingkungan Hidup Sultra';
		$data['seputar_dlh'] = $this->db->select('*')->limit(3)->order_by('id','DESC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['boxslider'] = $this->db->select('*')->limit(5)->order_by('id','DESC')->get('galeri')->result_array();
		$data['list_artikel'] = $this->db->select('*')->limit(3)->order_by('id','DESC')->get('artikel')->result_array();
		$data['pengaduan'] = $this->db->select('*')->limit(2)->order_by('id','DESC')->get('pengaduan_online')->result_array();
		$data['list_info'] = $this->db->select('*')->limit(3)->order_by('id','DESC')->get('info')->result_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();

		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();
		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/home');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

		public function Profil()
	{
		$data['title'] = 'Profil DLH Prov Sultra';
		$data['profil'] = $this->db->get('profil')->row_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(4)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();
		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/profil');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

		public function Tupoksi()
	{
		$data['title'] = 'Tupoksi';
		$data['tupoksi'] = $this->db->get('tupoksi')->row_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(4)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();		
		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/tupoksi');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

		public function Struktur_organisasi()
	{
		$data['title'] = 'Struktur Organisasi';
		$data['struktur_organisasi'] = $this->db->get('struktur_organisasi')->row_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(4)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/struktur-organisasi');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

		public function Visi_dan_misi()
	{
		$data['title'] = 'Visi dan Misi';
		$data['visi_misi'] = $this->db->get('visi_misi')->row_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(4)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/visi-dan-misi');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

		public function Sekretaris()
	{
		$data['title'] = 'Tupoksi Sekretaris';
		$data['t_sek'] = $this->db->get('tupoksi_sek')->row_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(4)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/sekretaris');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

		public function Tata_lingkungan()
	{
		$data['title'] = 'Tupoksi Tata_lingkungan';
		$data['t_ttl'] = $this->db->get('tupoksi_ttl')->row_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();
		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(4)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/tata-lingkungan');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

	public function Pengendalian_pencemaran_dan_kerusakan_lingkungan()
	{
		$data['title'] = 'Tupoksi Tata_lingkungan';
		$data['t_ppdk'] = $this->db->get('tupoksi_ppdk')->row_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();
		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(4)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/ppdk');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

	public function Penaatan_dan_peningkatan_kapasitas_lingkungan()
	{
		$data['title'] = 'Tupoksi Tata_lingkungan';
		$data['t_ppkl'] = $this->db->get('tupoksi_ppkl')->row_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(4)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();

		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/ppkl');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

	public function sampah_dan_limbah_b3()
	{
		$data['title'] = 'Sampah dan Lingkungan B3';
		$data['t_sdl'] = $this->db->get('tupoksi_sdl')->row_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(4)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();

		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/sdl');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

		public function upt_laboratorium()
	{
		$data['title'] = 'UPT Laboratorium';
		$data['upt'] = $this->db->get('upt_laboratorium')->row_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(4)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();

		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/upt-laboratorium');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

		public function upst()
	{
		$data['title'] = 'UPST';
		$data['upst'] = $this->db->get('upst')->row_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(4)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();

		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/upst');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}


		public function program_prioritas()
	{
		$data['title'] = 'Program Prioritas';
		$data['pri'] = $this->db->get('prioritas')->row_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(4)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();

		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/program-prioritas');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}



	public function program($text) {
		$data['program'] = $this->db->get('program')->result_array();
		$data['proker'] = $this->db->get_where('program', ['text' => $text])->row_array();
		$data['namefile'] = $this->db->get_where('program', ['text' => $text])->row();
		$title = $this->db->get_where('program', ['text' => $text])->row_array();

		$data['title'] = $title['judul'];


		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/program');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

	public function downloadprogram($text) {
		$data = $this->db->get_where('program', ['text' => $text])->row();
		force_download('file/program/'. $data->file,NULL);
	}

	public function downloaddata($text) {
		$data = $this->db->get_where('data', ['text' => $text])->row();
		force_download('file/data/'. $data->file,NULL);
	}

	public function data($text) {
		$data['data'] = $this->db->get('data')->result_array();
		$data['dataisi'] = $this->db->get_where('data', ['text' => $text])->row_array();

		$title = $this->db->get_where('data', ['text' => $text])->row_array();

		$data['title'] = $title['judul'];


		$data['namefile'] = $this->db->get_where('data', ['text' => $text])->row();
		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();

		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/data');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}
		public function Seputar_dlh()
	{
		$data['title'] = 'Seputar Dinas Lingkungan Hidup';

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(12)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/seputar-dlh');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

	public function Artikel()
	{
		$data['title'] = 'Artikel';
		$data['art'] = $this->db->get('artikel')->result_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['art'] = $this->db->select('*')->limit(12)->order_by('id','DESC')->get('artikel')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();
		
		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/artikel');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

	public function iklh_2017_download()
	{
		force_download('file/data/IKLH_2017.pdf',NULL);
	}

	public function iklh_2018_download()
	{
		force_download('file/data/IKLH_2018.pdf',NULL);
	}

	public function KEPMEN_LHK_NO_32_SK_2020_download()
	{
		force_download('file/data/kepmen_lhk_no_32_sk_2020.pdf',NULL);
	}

	public function Info()
	{
		$data['title'] = 'Info';
		$data['inf'] = $this->db->get('info')->result_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['artikel'] = $this->db->select('*')->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/info');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

	public function Galeri()
	{
		$data['title'] = 'Galeri';
		$data['gal'] = $this->db->get('galeri')->result_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->limit(4)->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/galeri');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

	public function Peraturan()
	{
		$data['title'] = 'Peraturan';
		$data['per'] = $this->db->get('peraturan')->row_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();	

		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/peraturan');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

	public function Layanan_Pengaduan()
	{
		$data['title'] = 'Layanan Pengaduan Online';

		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('alamat_pelapor', 'Alamat Pelapor', 'required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required');		
		$this->form_validation->set_rules('alamat_kejadian', 'Alamat Kejadian', 'required');			
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');			
		$this->form_validation->set_rules('link_google_maps', 'Link Google Maps', 'required');


		$data['pengaduan'] = $this->db->get('pengaduan_online')->result_array();

		if($this->form_validation->run() == false){

			$this->load->view('konten/pengaduan',$data);
		}
		else{
			if($foto_ktp =''){
			}
			if($foto_kejadian =''){
			}
			else{
				$config['upload_path'] = './assets/img/img_pengaduan/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '4800';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto_ktp')){
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Gambar Tidak Cocok!</div>');
					redirect('konten/layanan_pengaduan');
				}
				else{
					$foto_ktp = $this->upload->data('file_name');
					$this->db->set('foto_ktp', $foto_ktp);
					}
				if(!$this->upload->do_upload('foto_kejadian')){
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Gambar Tidak Cocok!</div>');
					redirect('konten/layanan_pengaduan');
				}
				else{
					$this->konten->addPengaduan();
				}
			}

			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Permintaan Pengaduan Terkirim!</div>');
			redirect('konten/layanan_pengaduan');
		}
	}

	public function berita_selengkapnya($text) {
		$data['selengkapnya'] = $this->db->get_where('berita', ['text' => $text])->row_array();

		$title = $this->db->get_where('berita', ['text' => $text])->row_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();

		$data['title'] = $title['judul'];


		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/berita-selengkapnya');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

	public function artikel_selengkapnya($text) {
		$data['selengkapnya'] = $this->db->get_where('artikel', ['text' => $text])->row_array();

		$title = $this->db->get_where('artikel', ['text' => $text])->row_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();
		$data['title'] = $title['judul'];

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/artikel-selengkapnya');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}

	public function info_selengkapnya($text) {
		$data['selengkapnya'] = $this->db->get_where('info', ['text' => $text])->row_array();

		$title = $this->db->get_where('info', ['text' => $text])->row_array();
		$data['program'] = $this->db->select('*')->order_by('id','DESC')->get('program')->result_array();
		$data['title'] = $title['judul'];

		$data['data'] = $this->db->select('*')->order_by('id','DESC')->get('data')->result_array();

		$data['kontak_kami'] = $this->db->select('*')->get('kontak')->row_array();
		$data['seputar_dlh'] = $this->db->select('*')->order_by('id','DESC')->get('berita')->result_array();
		$data['sidebar'] = $this->db->select('*')->limit(7)->order_by('id','ASC')->get_where('berita', ['kategori' => 'Seputar Dinas Lingkungan Hidup'])->result_array();
			
		$this->load->view('templates/berita_header',$data);
		$this->load->view('konten/info-selengkapnya');
		$this->load->view('templates/berita_sidebar',$data);
		$this->load->view('templates/berita_footer');
	}


}