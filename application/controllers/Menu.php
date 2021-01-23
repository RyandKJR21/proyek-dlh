<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		logged_in();
		$this->load->model('Menu_model', 'menu');
	}

	
	public function index()
	{
		$data['title'] = 'Menu Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('menu', 'Menu', 'required');

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('menu/index',$data);
		$this->load->view('templates/footer');
		}
		else{
			$this->menu->addMenu();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">New menu added!</div>');
			redirect('menu');
		}
	}

	public function ubahMenu($id)
	{

		$data['title'] = 'Edit Menu';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user_menu'] = $this->db->get_where('user_menu', ['id' => $id])->row_array();

		$this->form_validation->set_rules('menu', 'Menu', 'required');

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('menu/edit-menu',$data);
		$this->load->view('templates/footer');
		}
		else{
			$this->menu->updateMenu($id);
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Menu update success!</div>');
			redirect('menu');
		}
	}


	public function hapusMenu($id)
	{
		$this->menu->deleteMenu($id);
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Delete data success!</div>');
			redirect('menu');
	}


	public function subMenu()
	{
		$data['title'] = 'Submenu Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['subMenu'] = $this->menu->getSubMenu();
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('menu/submenu',$data);
		$this->load->view('templates/footer');
		}
		else{
			$this->menu->tambahSubmenu();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">New Submenu added!</div>');
			redirect('menu/submenu');
		}
	}


	public function ubahSubmenu($id)
	{
		$data['title'] = 'Edit Submenu';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['menu'] = $this->db->get('user_menu')->result_array();
		$data['user_sub_menu'] = $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('menu/edit-submenu',$data);
		$this->load->view('templates/footer');
		}
		else{

			$this->menu->updateSubmenu($id);

			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Menu update success!</div>');
			redirect('menu/submenu');
		}
	}


	public function hapusSubmenu($id)
	{
		$this->menu->deleteSubmenu($id);
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Delete data success!</div>');
			redirect('menu/submenu');
	}

	public function menuHeader()
	{
		$data['title'] = 'Menu Header Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['headerMenu'] = $this->menu->getHeaderMenu();
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('menu/headermenu',$data);
		$this->load->view('templates/footer');
		}
		else{
			$this->menu->tambahHeadermenu();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">New Header menu added!</div>');
			redirect('menu/menuHeader');
		}
	}


	public function ubahHeadermenu($id)
	{
		$data['title'] = 'Edit Headermenu';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['menu'] = $this->db->get('user_menu')->result_array();
		$data['user_header_menu'] = $this->db->get_where('user_header_menu', ['id' => $id])->row_array();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('menu/edit-headermenu',$data);
		$this->load->view('templates/footer');
		}
		else{

			$this->menu->updateHeadermenu($id);

			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Header menu update success!</div>');
			redirect('menu/menuHeader');
		}
	}


	public function hapusHeadermenu($id)
	{
		$this->menu->deleteHeadermenu($id);
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Delete Header menu success!</div>');
			redirect('menu/menuheader');
	}
}
?>