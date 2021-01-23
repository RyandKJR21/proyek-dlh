<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{
		//mengakses dengan email jika ada
		if($this->session->userdata('email')){
			redirect('user');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false){
			$data['title'] = 'DLH Prov Sultra';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} 
		else {
			$this->_login();
		}
	}


	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email'=>$email])->row_array();

		//jika usernya ada
		if($user){
			//jika user aktif
			if($user['is_active'] == 1){
				//cek password
				if(password_verify($password, $user['password'])){
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);

					if($user['role_id'] == 1){
						redirect('admin');
					}
					else{
						redirect('user');
					}
				}
				else{
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
					redirect('auth');
				}
			}
			else{
				$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
				redirect('auth');
			}
		}
		else{
			$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('auth');
		}
	}
	

	public function registration()
	{
		if($this->session->userdata('email')){
			redirect('user');
		}
		
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',
		['is_unique' => 'This email has already used!']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]',
		['matches' => 'Password dont match!', 'min_length' => 'Password too short!']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false){
			$data['title'] = 'ANI User Registration';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} 
		else {
				$email = $this->input->post('email', true);
				$data = [
					'name' => htmlspecialchars($this->input->post('name', true)),
					'email' => htmlspecialchars($email),
					'image' => 'default.gif',
					'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
					'role_id' => 2,
					'is_active' => 0,
					'date_created' => time()
				];
				
				//token
				$token = base64_encode(random_bytes(28));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				];



				$this->db->insert('user', $data);
				$this->db->insert('user_token', $user_token);

				$this->_sendEmail($token, 'verify');

				$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Conguratulation! your account has been created, Please activate your account!</div>');
				redirect('auth');
			}
	}


	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'ryandcoc2@gmail.com',
			'smtp_pass' => 'ryandmds2121',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"
		];

		$this->email->initialize($config);

		$this->email->from('ryandcoc2@gmail.com', 'Neko Yand');
		$this->email->to($this->input->post('email'));

		if($type == 'verify'){
		$this->email->subject('Welcome to Neko Yand');
		$this->email->message('Click this link to verify your account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
		}
		else if($type == 'forgot'){
		$this->email->subject('Welcome to Neko Yand');
		$this->email->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset password</a>');
		}

		if($this->email->send()){
			return true;
		}
		else{
			echo $this->email->print_debugger();
			die;
		}

	}


	public function verify()
	{
		//activation email
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

		if($user){
			if($user_token){
				if(time() - $user_token['date_created'] < (60*60*24)){
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('user');

					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">' . $email . ' Your account has been activated! Please login</div>');
					redirect('auth');
				}
				else{
					$this->db->delete('user', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Activation failed! Token expired</div>');
					redirect('auth');
				}
			}
			else{
				$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Activation failed! Wrong token</div>');
				redirect('auth');
			}
		}
		else{
			$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Activation failed! Wrong email</div>');
			redirect('auth');
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">You has been logged out!</div>');
		redirect('auth');
	}


	public function blocked()
	{
		$data['title'] = 'Access Blocked';

		$this->load->view('templates/header',$data);
		$this->load->view('auth/blocked');
		$this->load->view('templates/footer');
	}


	public function forgotPassword()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if($this->form_validation->run() == false){	

		$data['title'] = 'Forgot Password';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/forgot-password');
		$this->load->view('templates/auth_footer');
		}
		else{
			$email = $this->input->post('email');
			$user = $this->db->get_where('user', ['email' => $email])->row_array();
			$user_activate = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

			if($user){
				if($user_activate){
					$token = base64_encode(random_bytes(28));
					$user_token = [
						'email' => $email,
						'token' => $token,
						'date_created' => time()
					];

					$this->db->insert('user_token', $user_token);
					$this->_sendEmail($token, 'forgot');

					$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Please check your email to reset your password!</div>');
					redirect('auth/forgotpassword');
				}
				else{
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Email is not Activated!</div>');
					redirect('auth/forgotpassword');
				}
			}
			else{
				$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
				redirect('auth/forgotpassword');
			}
		}
	}


	public function resetPassword()
	{

		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

		if($user){
			if($user_token){
				if(time() - $user_token['date_created'] < (60*60*24)){
					$this->session->set_userdata('reset_password', $user['name']);
					$this->changePassword();
				}
				else{
					$this->db->delete('user', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Activation failed! Token expired</div>');
					redirect('auth');
				}
			}
			else{
				$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Activation failed! Wrong token</div>');
				redirect('auth');
			}
		}
		else{
			$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Activation failed! Wrong email</div>');
			redirect('auth');
		}
	}


	public function changePassword()
	{

		if(!$this->session->userdata('reset_password')){
			redirect('auth');
		}

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Repeat password', 'required|trim|min_length[5]|matches[password1]');

		if($this->form_validation->run() == false){
		$data['title'] = 'Change Password';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/change-password');
		$this->load->view('templates/auth_footer');	
		}
		else{
			$password = password_hash($this->input->post('Password1'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_password');

			$this->db->where('id', $id)->update('user', ['password' => $password]);

			$this->session->unset_userdata('reset_password');

			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Reset password success, Please login!</div>');
			redirect('auth');
		}
	}
}
?>