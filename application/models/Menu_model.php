<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model
{
	public function getSubMenu()
	{
		$query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
					FROM `user_sub_menu` JOIN `user_menu`
					ON `user_sub_menu`.`menu_id` = `user_menu`.`id`";
	
		return $this->db->query($query)->result_array();
	}

	public function getHeaderMenu()
	{
		$query = "SELECT `user_header_menu`.*, `user_menu`.`menu`
					FROM `user_header_menu` JOIN `user_menu`
					ON `user_header_menu`.`menu_id` = `user_menu`.`id`";
	
		return $this->db->query($query)->result_array();
	}

	public function addMenu()
	{
		$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
	}


	public function updateMenu($id)
	{
		$menu = $this->input->post('menu', true);
		$this->db->where('id', $id)->update('user_menu', ['menu' => $menu]);
	}


	public function deleteMenu($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_menu');
	}


	public function tambahSubmenu()
	{
		$data = [
				'title' => $this->input->post('title'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'icon' => $this->input->post('icon'),
				'is_active' => $this->input->post('is_active')
			];
			
			$this->db->insert('user_sub_menu', $data);
	}


	public function updateSubmenu($id)
	{
		$title = $this->input->post('title', true);
		$menu_id = $this->input->post('menu_id', true);
		$url = $this->input->post('url', true);
		$icon = $this->input->post('icon', true);
		$is_active = $this->input->post('is_active', true);
		$this->db->where('id', $id)->update('user_sub_menu', ['title' => $title,
															'menu_id' => $menu_id,
															'url' => $url,
															'icon' => $icon,
															'is_active' => $is_active
															]);
	}


	public function deleteSubmenu($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_sub_menu');
	}


	public function tambahHeadermenu()
	{
		$data = [
				'title' => $this->input->post('title'),
				'menu_id' => $this->input->post('menu_id'),
				'icon' => $this->input->post('icon')
			];
			
			$this->db->insert('user_header_menu', $data);
	}


	public function updateHeadermenu($id)
	{
		$title = $this->input->post('title', true);
		$menu_id = $this->input->post('menu_id', true);
		$icon = $this->input->post('icon', true);
		$this->db->where('id', $id)->update('user_header_menu', ['title' => $title,
															'menu_id' => $menu_id,
															'icon' => $icon
															]);
	}


	public function deleteHeadermenu($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_header_menu');
	}

}