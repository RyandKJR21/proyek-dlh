<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model
{

	public function addBerita()
	{	
		$image = $this->upload->data('file_name');
		$this->db->insert('berita', ['judul' => $this->input->post('judul'),
										'kategori' => $this->input->post('kategori'),
										'isi' => $this->input->post('isi'),
										'text' => $this->input->post('text'),
										'tanggal' => date('Y-m-d H:i:s'),
										'uploadby' => $this->input->post('uploadby'),
										'image' => $image
						]);
	}

		public function updateBerita($id)
	{
		$judul = $this->input->post('judul', true);
		$kategori = $this->input->post('kategori', true);
		$isi = $this->input->post('isi', true);
		$text = $this->input->post('text', true);
		$uploadby = $this->input->post('uploadby', true);
		$this->db->where('id', $id)->update('berita', ['judul' => $judul,
										'kategori' => $kategori,
										'isi' => $isi,
										'text' => $text,
										'uploadby' => $uploadby
										]);
	}

	
		public function deleteBerita($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('berita');
	}

		public function addArtikel()
	{	
		$image = $this->upload->data('file_name');
		$this->db->insert('artikel', ['judul' => $this->input->post('judul'),
										'kategori' => $this->input->post('kategori'),
										'isi' => $this->input->post('isi'),
										'text' => $this->input->post('text'),
										'tanggal' => date('Y-m-d H:i:s'),
										'uploadby' => $this->input->post('uploadby'),
										'image' => $image
						]);
	}

		public function updateArtikel($id)
	{
		$judul = $this->input->post('judul', true);
		$kategori = $this->input->post('kategori', true);
		$isi = $this->input->post('isi', true);
		$text = $this->input->post('text', true);
		$uploadby = $this->input->post('uploadby', true);
		$this->db->where('id', $id)->update('artikel', ['judul' => $judul,
										'kategori' => $kategori,
										'isi' => $isi,
										'text' => $text,
										'uploadby' => $uploadby
										]);
	}

		public function deleteArtikel($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('artikel');
	}

		public function addInfo()
	{	
		$image = $this->upload->data('file_name');
		$this->db->insert('info', ['judul' => $this->input->post('judul'),
										'kategori' => $this->input->post('kategori'),
										'isi' => $this->input->post('isi'),
										'text' => $this->input->post('text'),
										'tanggal' => date('Y-m-d H:i:s'),
										'uploadby' => $this->input->post('uploadby'),
										'image' => $image
						]);
	}

		public function updateInfo($id)
	{
		$judul = $this->input->post('judul', true);
		$kategori = $this->input->post('kategori', true);
		$isi = $this->input->post('isi', true);
		$text = $this->input->post('text', true);
		$uploadby = $this->input->post('uploadby', true);
		$this->db->where('id', $id)->update('info', ['judul' => $judul,
										'kategori' => $kategori,
										'isi' => $isi,
										'text' => $text,
										'uploadby' => $uploadby
										]);
	}

		public function deleteInfo($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('info');
	}

	public function addKategori()
	{
		$this->db->insert('kategori', ['kategori' => $this->input->post('kategori'),
											'alias' => $this->input->post('alias')
										]);
	}


	public function updateKategori($id)
	{
		$kategori = $this->input->post('kategori', true);
		$alias = $this->input->post('alias', true);
		$this->db->where('id', $id)->update('kategori', ['kategori' => $kategori,
															'alias' => $alias
														]);
	}


	public function deleteKategori($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('kategori');
	}

	public function updateProfil()
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$this->db->update('profil', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s')
										]);
	}	

	public function updateStrukturOrganisasi()
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$this->db->update('struktur_organisasi', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s')
										]);
	}	

		public function updateVisiMisi()
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$this->db->update('visi_misi', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s')
										]);
	}


		public function updatePrioritas()
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$this->db->update('prioritas', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s')
										]);
	}

		public function updateUpst()
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$this->db->update('upst', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s')
										]);
	}

	public function addData()
	{
		$file = $this->upload->data('file_name');
		$this->db->insert('data', ['judul' => $this->input->post('judul'),
											'isi' => $this->input->post('isi'),
											'uploadby' => $this->input->post('uploadby'),
											'updated_at' => date('Y-m-d H:i:s'),
											'text' => $this->input->post('text'),
											'file' => $file
										]);
	}

		public function updateData($id)
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$text = $this->input->post('text', true);
		$this->db->where('id',$id)->update('data', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s'),
										'text' => $text
										]);
	}




		public function updateUptLaboratorium()
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$this->db->update('upt_laboratorium', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s')
										]);
	}


		public function updatePeraturan()
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$this->db->update('peraturan', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s')
										]);
	}

	public function addProgram()
	{
		$file1 = $this->upload->data('file_name');
		$file2 = $this->upload->data('file_name');
		$file3 = $this->upload->data('file_name');
		$file4 = $this->upload->data('file_name');
		$file5 = $this->upload->data('file_name');
		$this->db->insert('program', ['judul' => $this->input->post('judul'),
											'isi' => $this->input->post('isi'),
											'uploadby' => $this->input->post('uploadby'),
											'updated_at' => date('Y-m-d H:i:s'),
											'text' => $this->input->post('text'),
											'file1' => $file1,
											'file2' => $file2,
											'file3' => $file3,
											'file4' => $file4,
											'file5' => $file5
										]);
	}

		public function updateProgram($id)
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$text = $this->input->post('text', true);
		$this->db->where('id',$id)->update('program', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s'),
										'text' => $text
										]);
	}

		public function deleteProgram($id)
	{
		$_id = $this->db->get_where('program',['id' => $id])->row();
		$query = $this->db->delete('program',['id' => $id]);
		if($query){
			unlink('file/program'.$_id->file);
		}
	}


		public function updateKontak()
	{
		$isi = $this->input->post('isi', true);
		$this->db->update('kontak', ['isi' => $isi
										]);
	}

		public function updateTupoksi()
	{
		$judul = $this->input->post('judul', true);
		$isi = $this->input->post('isi', true);
		$uploadby = $this->input->post('uploadby', true);
		$updated_at = $this->input->post('updated_at', true);
		$this->db->update('tupoksi', ['judul' => $judul,
										'isi' => $isi,
										'uploadby' => $uploadby,
										'updated_at' => date('Y-m-d H:i:s')
										]);
	}


	public function deletePengaduan($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pengaduan_online');
	}
}