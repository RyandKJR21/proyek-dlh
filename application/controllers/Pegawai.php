<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pegawai_model', 'pegawai');
	}

	
	public function sekretaris()
	{
		$data['title'] = 'Sekretaris';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_pegawai', 'Nama pegawai', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('nip', 'Nip', 'required|is_unique[sekretaris.nip]', ['is_unique' => 'This nip has already used!']);		

		$data['sek'] = $this->db->get('sekretaris')->result_array();

		if($this->form_validation->run() == false){	
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('pegawai/data-sekretaris');
			$this->load->view('templates/footer');
		}
		else{
			$this->pegawai->addPegawai();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Add Sekretaris success!</div>');
			redirect('pegawai/sekretaris');
		}
	}

	public function edit_sekretaris($id)
	{

		$data['title'] = 'Edit Data Sekretaris';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_pegawai', 'Nama pegawai', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('nip', 'Nip', 'required');

		$data['sek'] = $this->db->get_where('sekretaris', ['id' => $id])->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('pegawai/edit-sekretaris');
			$this->load->view('templates/footer');
		}
		else{
			$this->pegawai->updatePegawai($id);
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Sekretaris success!</div>');
			redirect('pegawai/sekretaris');
		}
	}


		public function hapus_sekretaris($id)
	{		
		$this->pegawai->deletePegawai($id);
		$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Delete Sekretaris success!</div>');
			redirect('pegawai/sekretaris');
	}

	public function tupoksi_sek(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tupoksi Sekretaris';
		$data['t_sek'] = $this->db->get('tupoksi_sek')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('pegawai/tupoksi-sekretaris');
		$this->load->view('templates/footer');
	}

	public function edit_tupoksi_sek(){
		$data['title'] = 'Edit Tupoksi Sekretaris';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['t_sek'] = $this->db->get('tupoksi_sek')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('pegawai/edit-tupoksi-sekretaris');
			$this->load->view('templates/footer');
		}
		else{
			$this->pegawai->updateTupoksiSek();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Tupoksi Success!</div>');
			redirect('pegawai/tupoksi_sek');
		}
	}

		public function tupoksi_ttl(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tupoksi Tata Lingkungan';
		$data['t_ttl'] = $this->db->get('tupoksi_ttl')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('pegawai/tupoksi-ttl');
		$this->load->view('templates/footer');
	}

	public function edit_tupoksi_ttl(){
		$data['title'] = 'Edit Tupoksi Tata Lingkungan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['t_ttl'] = $this->db->get('tupoksi_ttl')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('pegawai/edit-tupoksi-ttl');
			$this->load->view('templates/footer');
		}
		else{
			$this->pegawai->updateTupoksiTtl();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Tupoksi Success!</div>');
			redirect('pegawai/tupoksi_ttl');
		}
	}

		public function tupoksi_ppdk(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tupoksi Pengendalian Pencemaran dan Kerusakan Lingkungan';
		$data['t_ppdk'] = $this->db->get('tupoksi_ppdk')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('pegawai/tupoksi-ppdk');
		$this->load->view('templates/footer');
	}

	public function edit_tupoksi_ppdk(){
		$data['title'] = 'Edit Tupoksi Pengendalian Pencemaran dan Kerusakan Lingkungan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['t_ppdk'] = $this->db->get('tupoksi_ppdk')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('pegawai/edit-tupoksi-ppdk');
			$this->load->view('templates/footer');
		}
		else{
			$this->pegawai->updateTupoksiPpdk();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Tupoksi Success!</div>');
			redirect('pegawai/tupoksi_ppdk');
		}
	}

		public function tupoksi_ppkl(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tupoksi Penaatan dan Peningkatan Kapasitas Lingkungan';
		$data['t_ppkl'] = $this->db->get('tupoksi_ppkl')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('pegawai/tupoksi-ppkl');
		$this->load->view('templates/footer');
	}

	public function edit_tupoksi_ppkl(){
		$data['title'] = 'Edit Tupoksi Penaatan dan Peningkatan Kapasitas Lingkungan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['t_ppkl'] = $this->db->get('tupoksi_ppkl')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('pegawai/edit-tupoksi-ppkl');
			$this->load->view('templates/footer');
		}
		else{
			$this->pegawai->updateTupoksiPpkl();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Tupoksi Success!</div>');
			redirect('pegawai/tupoksi_ppkl');
		}
	}

		public function tupoksi_sdl(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tupoksi Sampah dan Lingkungan B3';
		$data['t_sdl'] = $this->db->get('tupoksi_sdl')->result_array();	

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('pegawai/tupoksi-sdl');
		$this->load->view('templates/footer');
	}

	public function edit_tupoksi_sdl(){
		$data['title'] = 'Edit Tupoksi Sampah dan Limbah B3 ';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('uploadby', 'Uploadby', 'required');

		$data['t_sdl'] = $this->db->get('tupoksi_sdl')->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('pegawai/edit-tupoksi-sdl');
			$this->load->view('templates/footer');
		}
		else{
			$this->pegawai->updateTupoksiSdl();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update Tupoksi Success!</div>');
			redirect('pegawai/tupoksi_sdl');
		}
	}

}

