<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten_model extends CI_Model
{

	public function addPengaduan()
	{
		$foto_kejadian = $this->upload->data('file_name');
		$this->db->insert('pengaduan_online', ['nama_lengkap' => $this->input->post('nama_lengkap'),
											'alamat_pelapor' => $this->input->post('alamat_pelapor'),
											'no_telp' => $this->input->post('no_telp'),	
											'foto_kejadian' => $foto_kejadian,
											'alamat_kejadian' => $this->input->post('alamat_kejadian'),
											'keterangan' => $this->input->post('keterangan'),
											'link_google_maps' => $this->input->post('link_google_maps'),
											'date' => date('Y-m-d H:i:s')
										]);
	}

}