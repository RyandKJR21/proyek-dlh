<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Berita_model', 'berita');
	}

	public function data_berita()
	{
		$data['title'] = 'List Berita';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['kategori'] = $this->db->get('kategori')->result_array();
		$data['berita'] = $this->db->get('berita')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-berita');
		$this->load->view('templates/footer');

	}

	public function tambah_berita()
	{
		$data['title'] = 'Tambah Berita';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['kategori'] = $this->db->get('kategori')->result_array();
		$data['berita'] = $this->db->get('berita')->result_array();

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/tambah-berita');
		$this->load->view('templates/footer');
		}
		else{
			if($image=''){
			}
			else{
				$config['upload_path'] = './assets/img/img_berita/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '4800';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image')){				
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Image not Suitable!</div>');
					redirect('berita/data_berita');
				}
				else{
					$this->berita->addBerita();
				}
			}
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Add Berita Success!</div>');
			redirect('berita/data_berita');
		}		
	}

	public function edit_berita($id)
	{
		$data['title'] = 'Edit Berita';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['berita'] = $this->db->get_where('berita', ['id' => $id])->row_array();
		$data['kategori'] = $this->db->get('kategori')->result_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-berita');
			$this->load->view('templates/footer');
		}
		else{
			$upload_gambar = $_FILES['image']['name'];
			if($upload_gambar){
				$config['upload_path'] = './assets/img/img_berita/';
				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image')){
				$old_image = $data['berita']['image'];
					if ($old_image != 'default.png'){
						unlink(FCPATH . 'assets/img/img_berita/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				}
				else{
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Image not Suitable!</div>');
					redirect('berita/data_berita');
				}
			}
			$this->berita->updateBerita($id);
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Berita Success!</div>');
			redirect('berita/data_berita');
		}
	}

		public function hapus_berita($id)
	{		
		$this->berita->deleteBerita($id);
		$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Delete Berita Success!</div>');
		redirect('berita/data_berita');
	}

	public function data_artikel()
	{
		$data['title'] = 'List Artikel';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['kategori'] = $this->db->get('kategori')->result_array();
		$data['artikel'] = $this->db->get('artikel')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-artikel');
		$this->load->view('templates/footer');

	}

	public function tambah_artikel()
	{
		$data['title'] = 'Tambah Artikel';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['kategori'] = $this->db->get('kategori')->result_array();
		$data['artikel'] = $this->db->get('artikel')->result_array();

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/tambah-artikel');
		$this->load->view('templates/footer');
		}
		else{
			if($image=''){
			}
			else{
				$config['upload_path'] = './assets/img/img_artikel/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '4800';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image')){				
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Image not Suitable!</div>');
					redirect('berita/data_artikel');
				}
				else{
					$this->berita->addArtikel();
				}
			}
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Add Artikel Success!</div>');
			redirect('berita/data_artikel');
		}		
	}

	public function edit_artikel($id)
	{
		$data['title'] = 'Edit Artikel';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['artikel'] = $this->db->get_where('artikel', ['id' => $id])->row_array();
		$data['kategori'] = $this->db->get('kategori')->result_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-artikel');
			$this->load->view('templates/footer');
		}
		else{
			$upload_gambar = $_FILES['image']['name'];
			if($upload_gambar){
				$config['upload_path'] = './assets/img/img_artikel/';
				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image')){
				$old_image = $data['artikel']['image'];
					if ($old_image != 'default.png'){
						unlink(FCPATH . 'assets/img/img_artikel/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				}
				else{
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Image not Suitable!</div>');
					redirect('berita/data_artikel');
				}
			}
			$this->berita->updateArtikel($id);
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Add Artikel Success!</div>');
			redirect('berita/data_artikel');
		}
	}

		public function hapus_artikel($id)
	{		
		$this->berita->deleteArtikel($id);
		$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Delete Artikel Success!</div>');
		redirect('berita/data_artikel');
	}

	public function data_info()
	{
		$data['title'] = 'List Info';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['kategori'] = $this->db->get('kategori')->result_array();
		$data['info'] = $this->db->get('info')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-info');
		$this->load->view('templates/footer');

	}

	public function tambah_info()
	{
		$data['title'] = 'Tambah Info';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['kategori'] = $this->db->get('kategori')->result_array();
		$data['info'] = $this->db->get('info')->result_array();

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/tambah-info');
		$this->load->view('templates/footer');
		}
		else{
			if($image=''){
			}
			else{
				$config['upload_path'] = './assets/img/img_info/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '4800';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image')){				
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Image not Suitable!</div>');
					redirect('berita/data_info');
				}
				else{
					$this->berita->addInfo();
				}
			}
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Add Info Success!</div>');
			redirect('berita/data_info');
		}		
	}

	public function edit_info($id)
	{
		$data['title'] = 'Edit info';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['info'] = $this->db->get_where('info', ['id' => $id])->row_array();
		$data['kategori'] = $this->db->get('kategori')->result_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-info');
			$this->load->view('templates/footer');
		}
		else{
			$upload_gambar = $_FILES['image']['name'];
			if($upload_gambar){
				$config['upload_path'] = './assets/img/img_info/';
				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image')){
				$old_image = $data['info']['image'];
					if ($old_image != 'default.png'){
						unlink(FCPATH . 'assets/img/img_info/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				}
				else{
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Image not Suitable!</div>');
					redirect('berita/data_info');
				}
			}
			$this->berita->updateInfo($id);
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Add Info Success!</div>');
			redirect('berita/data_info');
		}
	}

		public function hapus_info($id)
	{		
		$this->berita->deleteInfo($id);
		$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Delete Info Success!</div>');
		redirect('berita/data_info');
	}

	public function data_kategori() {
		$data['title'] = "Kategori";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kat'] = $this->db->get('kategori')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-kategori');
		$this->load->view('templates/footer');
	}


	public function tambah_kategori() {

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('alias', 'Alias', 'required');

		if($this->form_validation->run() == false){
		}
		else{
		$this->berita->addKategori();
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Add Kategori Berita Success!</div>');
		redirect('berita/data_kategori');
		}
	}

	public function edit_kategori($id) {
		$data['title'] = 'Edit Kategori';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kat'] = $this->db->get_where('kategori', ['id' => $id])->row_array();
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('alias', 'Alias', 'required');

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/edit-kategori');
		$this->load->view('templates/footer');
		}
		else{
		$this->berita->updateKategori($id);
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Kategori Berita Success!</div>');
		redirect('berita/data_kategori');
		}
	}

	public function hapus_kategori($id)
	{		
		$this->berita->deleteKategori($id);
		$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Delete Kategori Berita Success!</div>');
		redirect('berita/data_kategori');
	}

	 public function data_galeri(){
		$data['gal'] = $this->db->get('galeri')->result_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Galeri';

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-galeri');
		$this->load->view('templates/footer');
	}

	public function tambah_galeri(){
		$data['gal'] = $this->db->get('galeri')->result_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('judul_image', 'Judul Image', 'required');
		if($this->form_validation->run() == false){
		}
		else{
			if($image=''){
				}
				else{
					$config['upload_path'] = './assets/img/img_galeri/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = '4800';

					$this->load->library('upload', $config);
					if(!$this->upload->do_upload('image')){
						$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Image not Suitable!</div>');
						redirect('berita/data_galeri');
					}
					else{
						$image = $this->upload->data('file_name');
						$this->db->insert('galeri', ['image' => $image,
														'judul_image' => $this->input->post('judul_image')
														
							]);
					}
				}

				$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Add Galeri Success!</div>');
				redirect('berita/data_galeri');
		}
	}

	public function hapus_galeri($id){
		$this->db->where('id', $id);
		$this->db->delete('galeri');
		$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Delete Galeri Success!</div>');
		redirect('berita/data_galeri');
	}


	public function data_profil(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Profil';
		$data['pro'] = $this->db->get('profil')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-profil');
		$this->load->view('templates/footer');
	}

	public function edit_profil(){
		$data['title'] = 'Edit Profil';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['pro'] = $this->db->get('profil')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-profil');
			$this->load->view('templates/footer');
		}
		else{
			$upload_gambar = $_FILES['image']['name'];
			if($upload_gambar){
				$config['upload_path'] = './assets/img/img_profil/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image')){
				$old_image = $data['profil']['image'];
					if ($old_image != 'default.jpeg'){
						unlink(FCPATH . 'assets/img/img_profil/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				}
				else{
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Image is Not Suitable!</div>');
					redirect('berita/data_profil');
				}
			}
			$this->berita->updateProfil();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Profil Success!</div>');
			redirect('berita/data_profil');
		}
	}

	public function data_struktur_organisasi(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Struktur Organisasi';
		$data['str'] = $this->db->get('struktur_organisasi')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-struktur-organisasi');
		$this->load->view('templates/footer');
	}

	public function edit_struktur_organisasi(){
		$data['title'] = 'Edit Struktur Organisasi';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['str'] = $this->db->get('struktur_organisasi')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-struktur-organisasi');
			$this->load->view('templates/footer');
		}
		else{
			$upload_gambar = $_FILES['image']['name'];
			if($upload_gambar){
				$config['upload_path'] = './assets/img/img_struktur_organisasi/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image')){
				$old_image = $data['profil']['image'];
					if ($old_image != 'default.jpeg'){
						unlink(FCPATH . 'assets/img/img_struktur_organisasi/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				}
				else{
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Image is Not Suitable!</div>');
					redirect('berita/data_struktur_organisasi');
				}
			}
			$this->berita->updateStrukturOrganisasi();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Struktur Organisasi Success!</div>');
			redirect('berita/data_struktur_organisasi');
		}
	}

	public function data_visi_misi(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Visi dan Misi';
		$data['vm'] = $this->db->get('visi_misi')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-visi-misi');
		$this->load->view('templates/footer');
	}

	public function edit_visi_misi(){
		$data['title'] = 'Edit Visi dan Misi';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['vm'] = $this->db->get('visi_misi')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-visi-misi');
			$this->load->view('templates/footer');
		}
		else{
			$this->berita->updateVisiMisi();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Visi dan Misi Success!</div>');
			redirect('berita/data_visi_misi');
		}
	}


	public function data_prioritas(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Prioritas';
		$data['pri'] = $this->db->get('prioritas')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-prioritas');
		$this->load->view('templates/footer');
	}

	public function edit_prioritas(){
		$data['title'] = 'Edit Prioritas';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['pri'] = $this->db->get('prioritas')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-prioritas');
			$this->load->view('templates/footer');
		}
		else{
			$this->berita->updatePrioritas();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Prioritas Success!</div>');
			redirect('berita/data_prioritas');
		}
	}

	public function data_upst(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'UPST';
		$data['upst'] = $this->db->get('upst')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-upst');
		$this->load->view('templates/footer');
	}

	public function edit_upst(){
		$data['title'] = 'Edit UPST';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['upst'] = $this->db->get('upst')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-upst');
			$this->load->view('templates/footer');
		}
		else{
			$this->berita->updateUpst();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update UPST Success!</div>');
			redirect('berita/data_upst');
		}
	}

	public function data_upk(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'UPK Badan Air';
		$data['upk'] = $this->db->get('upk_badan_air')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-upk');
		$this->load->view('templates/footer');
	}

	public function edit_upk(){
		$data['title'] = 'Edit UPK Badan Air';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['upk'] = $this->db->get('upk_badan_air')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-upk');
			$this->load->view('templates/footer');
		}
		else{
			$this->berita->updateUpk();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update UPK Badan Air Success!</div>');
			redirect('berita/data_upk');
		}
	}

	public function data_upt_laboratorium(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'UPT Laboratorium';
		$data['upt'] = $this->db->get('upt_laboratorium')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-upt-laboratorium');
		$this->load->view('templates/footer');
	}

	public function edit_upt_laboratorium(){
		$data['title'] = 'Edit UPT Laboratorium';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['upt'] = $this->db->get('upt_laboratorium')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-upt-laboratorium');
			$this->load->view('templates/footer');
		}
		else{
			$this->berita->updateUptLaboratorium();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update UPT Laboratorium Success!</div>');
			redirect('berita/data_upt_laboratorium');
		}
	}
	

	public function data_peraturan(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Peraturan';
		$data['per'] = $this->db->get('peraturan')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-peraturan');
		$this->load->view('templates/footer');
	}

	public function edit_peraturan(){
		$data['title'] = 'Edit Peraturan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['per'] = $this->db->get('peraturan')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-peraturan');
			$this->load->view('templates/footer');
		}
		else{
			$this->berita->updatePeraturan();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Peraturan Success!</div>');
			redirect('berita/data_peraturan');
		}
	}

	public function program(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Program Kerja';
		$data['program'] = $this->db->get('program')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-program');
		$this->load->view('templates/footer');
	}

	public function tambah_program()
	{
		$data['title'] = 'Tambah Program';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/tambah-program');
		$this->load->view('templates/footer');
		}
		else{
			if($file=''){
			}
			else{
				$config['upload_path'] = './file/program';
				$config['allowed_types'] = 'pdf|doc|docx';
				$config['max_size'] = '30000';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('file')){				
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">File not Suitable!</div>');
					redirect('berita/program');
				}
				else{
					$this->berita->addProgram();
				}
			}
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Add Program Success!</div>');
			redirect('berita/program');
		}
	}		

	public function edit_program($id){
		$data['title'] = 'Edit Program Kerja';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		$data['program'] = $this->db->get_where('program', ['id' => $id])->row_array();


		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-program');
			$this->load->view('templates/footer');
		}
		else{
			$upload_file = $_FILES['file']['name'];
			if($upload_file){
				$config['upload_path'] = './file/program';
				$config['allowed_types'] = 'pdf|doc|docx';
				$config['max_size'] = '30000';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('file')){
				$old_file = $data['program']['file'];
					if ($old_file != 'default.pdf'){
						unlink(FCPATH . 'file/program' . $old_file);
					}
					$new_file = $this->upload->data('file_name');
					$this->db->set('file', $new_file);
				}
				else{
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">File not Suitable!</div>');
					redirect('berita/program');
				}
			}
			$this->berita->updateProgram($id);
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Program Success!</div>');
			redirect('berita/program');
		}
	}


	public function hapus_program($id)
	{		
		$this->berita->deleteProgram($id);
		$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Delete Program Success!</div>');
		redirect('berita/program');
	}
	

	public function data(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Data';
		$data['data'] = $this->db->get('data')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data');
		$this->load->view('templates/footer');
	}
	
	public function tambah_data()
	{
		$data['title'] = 'Tambah Data';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/tambah-data');
		$this->load->view('templates/footer');
		}
		else{
			if($file=''){
			}
			else{
				$config['upload_path'] = './file/data';
				$config['allowed_types'] = 'pdf|doc|docx';
				$config['max_size'] = '100000';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('file')){				
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">File not Suitable!</div>');
					redirect('berita/data');
				}
				else{
					$this->berita->addData();
				}
			}
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Add Data Success!</div>');
			redirect('berita/data');
		}
	}		

	public function edit_data($id){
		$data['title'] = 'Edit Data';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		$data['data'] = $this->db->get_where('data', ['id' => $id])->row_array();


		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-data');
			$this->load->view('templates/footer');
		}
		else{
			$upload_file = $_FILES['file']['name'];
			if($upload_file){
				$config['upload_path'] = './file/data';
				$config['allowed_types'] = 'pdf|doc|docx';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('file')){
				$old_file = $data['data']['file'];
					if ($old_file != 'default.pdf'){
						unlink(FCPATH . 'file/data' . $old_file);
					}
					$new_file = $this->upload->data('file_name');
					$this->db->set('file', $new_file);
				}
				else{
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">File not Suitable!</div>');
					redirect('berita/data');
				}
			}
			$this->berita->updateData($id);
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Data Success!</div>');
			redirect('berita/data');
		}
	}


	public function hapus_data($id)
	{		
		$_id = $this->db->get_where('data',['id' => $id])->row_array();
		$query = $this->db->delete('data',['id' => $id]);
		if($query){
			unlink('file/data'.$_id['file']);
		$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Delete Data Success!</div>');
		redirect('berita/data');
		}
	}	

	public function data_kontak(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Kontak';
		$data['kon'] = $this->db->get('kontak')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-kontak');
		$this->load->view('templates/footer');
	}

	public function edit_kontak(){
		$data['title'] = 'Edit Kontak';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		$data['kon'] = $this->db->get('kontak')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-kontak');
			$this->load->view('templates/footer');
		}
		else{
			$this->berita->updateKontak();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Kontak Success!</div>');
			redirect('berita/data_kontak');
		}
	}
	
	public function data_tupoksi(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tupoksi';
		$data['tup'] = $this->db->get('tupoksi')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-tupoksi');
		$this->load->view('templates/footer');
	}

	public function edit_tupoksi(){
		$data['title'] = 'Edit Tupoksi';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['tup'] = $this->db->get('tupoksi')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('berita/edit-tupoksi');
			$this->load->view('templates/footer');
		}
		else{
			$this->berita->updateTupoksi();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Tupoksi Success!</div>');
			redirect('berita/data_tupoksi');
		}
	}

	public function pengaduan()
	{
		$data['title'] = 'Layanan Pengaduan Dinas Lingkungan Hidup Sultra';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['pengaduan'] = $this->db->get('pengaduan_online')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/data-pengaduan',$data);
		$this->load->view('templates/footer');
	}

	public function detail_pengaduan($Id)
	{
		$data['title'] = 'Layanan Pengaduan Dinas Lingkungan Hidup Sultra';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['pengaduan'] = $this->db->get_where('pengaduan_online', ['Id' => $Id])->row_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('berita/detail-pengaduan');
		$this->load->view('templates/footer');
	}

	public function hapus_pengaduan($id)
	{
		$this->berita->deletePengaduan($id);
		$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Delete Pengaduan Success!</div>');
		redirect('berita/pengaduan');
	}

	    // Upload image summernote
    function upload_image() {
        if(isset($_FILES["image"]["name"])){
            $config['upload_path'] = './assets/img/img_content/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload');
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('image')){
                $this->upload->display_errors();
                return FALSE;
            }else{
                $data = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/img/img_content/'.$data['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= TRUE;
                $config['quality']= '100%';
                $config['width']= 700;
                $config['height']= 700;
                $config['new_image']= './assets/img/img_content/'.$data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url().'assets/img/img_content/'.$data['file_name'];
            }
        }
    }
     // Delete image Summernote
    function delete_image() {
        $src = $this->input->post('src');
        $file_name = str_replace(base_url(), '', $src);
        if(unlink($file_name))
        {
            echo 'File Delete Successfully';
        }
    }

}