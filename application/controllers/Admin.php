<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admin');
		logged_in();
	}

	
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['tot_pengaduan'] = $this->admin->jumlahPengaduan();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('templates/footer');
	}


	public function role()
	{
		$data['title'] = 'Role';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('role', 'Role', 'required');

		$data['role'] = $this->db->get('user_role')->result_array();

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/role',$data);
		$this->load->view('templates/footer');
		}
		else{
			$this->admin->addRole();

			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Success add new role!</div>');
			redirect('admin/role');
		}
	}


	public function ubahRole($id)
	{
		$data['title'] = 'Role Update';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('role', 'Role', 'required');

		$data['user_role'] = $this->db->get_where('user_role', ['id' => $id])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();

		if($this->form_validation->run() == false){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/edit-role',$data);
		$this->load->view('templates/footer');
		}
		else{
			$this->admin->updateRole($id);

			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Success Update role!</div>');
			redirect('admin/role');
		}
	}


	public function hapusRole($id)
	{
		$this->admin->deleteRole($id);
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Delete row success!</div>');
		redirect('admin/role');
	}

	
	public function roleAccess($role_id)
	{
		$data['title'] = 'Role Access';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/role-access',$data);
		$this->load->view('templates/footer');
	}


	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if($result->num_rows() < 1){
			$this->db->insert('user_access_menu', $data);
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Access Changed!</div>');
		}
		else{
			$this->db->delete('user_access_menu', $data);
			$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Deleted Access!</div>');
		}
	}
}

