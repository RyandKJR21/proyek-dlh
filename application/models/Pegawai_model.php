<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{

	public function addPegawai()
	{
		$this->db->insert('sekretaris', ['nama_pegawai' => $this->input->post('nama_pegawai'),
											'nip' => $this->input->post('nip'),
											'jabatan' => $this->input->post('jabatan')
										]);
	}


	public function updatePegawai($id)
	{
		$nama_pegawai = $this->input->post('nama_pegawai', true);
		$nip = $this->input->post('nip', true);
		$jabatan = $this->input->post('jabatan', true);
		$this->db->where('id', $id)->update('sekretaris', ['nama_pegawai' => $nama_pegawai,
															'nip' => $nip,
															'jabatan' => $jabatan
														]);
	}


	public function deletePegawai($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('sekretaris');
	}

	public function updateTupoksiSek()
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$this->db->update('tupoksi_sek', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s')
										]);
	}

	public function updateTupoksiTtl()
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$this->db->update('tupoksi_ttl', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s')
										]);
	}

	public function updateTupoksiPpdk()
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$this->db->update('tupoksi_ppdk', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s')
										]);
	}

	public function updateTupoksiPpkl()
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$this->db->update('tupoksi_ppkl', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s')
										]);
	}

	public function updateTupoksiSdl()
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$this->db->update('tupoksi_sdl', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s')
										]);
	}
}