<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{

	public function addRole()
	{
		$this->db->insert('user_role', ['role' => $this->input->post('role')]);
	}


	public function deleteRole($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_role');
	}


	public function updateRole($id)
	{
		$role = $this->input->post('role', true);
		$this->db->where('id', $id)->update('user_role', ['role' => $role]);
	}

	public function jumlahPengaduan()
	{
		$query = $this->db->count_all("pengaduan_online");
		return $query;
	}
}
?>