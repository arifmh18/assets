<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if (!empty($this->session->userdata('username'))) 
		{
			redirect('dashboard');
		}
		else
		{
			$this->load->view('login');
		}
	}

	public function auth()
	{
		$e = $this->input->post('username');
		$p = $this->input->post('password');

		$this->load->model('LoginModel');
		$this->LoginModel->authen($e,$p);
	}

	public function out()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	public function profile()
	{
		$data['title'] = 'Edit profile | IT Assets';
		$data['breadcumb'] = '';
		$data['judul']= 'Edit Profile Admin';
		$data['view'] = 'profile/edit';
		$data['profile'] = $this->m_global->get_data_all('user');
		$this->load->view('master_template', $data);
	}
	public function registrasi()
	{
		$data['jurusan'] = $this->m_global->get_data_all('jurusan');
		$this->load->view('registrasi',$data);
	}
}

/* End of file Login */
/* Location: ./application/controllers/Login */