<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tata_lingkungan extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tata_lingkungan_model', 'tata_lingkungan');
		logged_in();
	}

	
	public function Tata_lingkungan()
	{
		$data['title'] = 'Tata Lingkungan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_pegawai', 'Nama pegawai', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('nip', 'Nip', 'required|is_unique[sekretaris.nip]', ['is_unique' => 'This nip has already used!']);
		$this->form_validation->set_rules('ringkasan_tugas', 'Ringkasan tugas', 'required');
		$this->form_validation->set_rules('rincian_tugas', 'Rincian tugas', 'required');		
		$this->form_validation->set_rules('wewenang', 'Wewenang', 'required');		
		$this->form_validation->set_rules('tanggung_jawab', 'Tanggung jawab', 'required');
		$this->form_validation->set_rules('hasil_kerja', 'Hasil kerja', 'required');

		$data['sek'] = $this->db->get('sekretaris')->result_array();

		if($this->form_validation->run() == false){	
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('tata_lingkungan/data-tata_lingkungan');
			$this->load->view('templates/footer');
		}
		else{
			if($image=''){
			}
			else{
				$config['upload_path'] = './assets/img/img_pegawai/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '4800';

				$this->load->library('upload', $config);
				if($this->upload->do_upload('image')){
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Gambar tidak cocok!</div>');
					redirect('sekretaris/sekretaris');
				}
				else{
					$this->sekretaris->addTata_lingkungan();
				}
			}

			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Add Sekretaris success!</div>');
			redirect('sekretaris/sekretaris');
		}

	}

	public function edit_sekretaris($id)
	{

		$data['title'] = 'Edit Data Sekretaris';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_pegawai', 'Nama pegawai', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('nip', 'Nip', 'required|is_unique[sekretaris.nip]', ['is_unique' => 'This nip has already used!']);
		$this->form_validation->set_rules('ringkasan_tugas', 'Ringkasan tugas', 'required');
		$this->form_validation->set_rules('rincian_tugas', 'Rincian tugas', 'required');		
		$this->form_validation->set_rules('wewenang', 'Wewenang', 'required');		
		$this->form_validation->set_rules('tanggung_jawab', 'Tanggung jawab', 'required');
		$this->form_validation->set_rules('hasil_kerja', 'Hasil kerja', 'required');

		$data['sek'] = $this->db->get_where('sekretaris', ['id' => $id])->row_array();

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('sekretaris/edit-sekretaris');
			$this->load->view('templates/footer');
		}
		else{
			$upload_gambar = $_FILES['image_peg']['name'];
			if($upload_gambar){
				$config['upload_path'] = './assets/img/img_pegawai/';
				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image_peg')){
				$old_image = $data['name']['image_peg'];
					if ($old_image != 'default.png'){
						unlink(FCPATH . 'assets/img/img_pegawai/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('image_peg', $new_image);
				}
				else{
					$this->session->set_flashdata('massage', 'Gambar tidak cocok!');
					redirect('sekretaris/sekretaris');
				}
			}
			$this->sekretaris->updateSekretaris($id);
			$this->session->set_flashdata('sukses', 'Data Sekretaris berhasil diupdate.');
			redirect('sekretaris/sekretaris');
		}
	}


		public function hapus_sekretaris($id)
	{		
		$this->sekretaris->deleteSekretaris($id);
		$this->session->set_flashdata('sukses', 'Data Sekretaris berhasil dihapus.');
			redirect('sekretaris/sekretaris');
	}

		public function detail_sekretaris($id) {
		$data['title'] = "Detail Sekretaris";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['sek'] = $this->db->get_where('sekretaris', ['id' => $id])->row_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('sekretaris/detail-sekretaris');
		$this->load->view('templates/footer');
	}

}

