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

	public function act_profile($id)
	{
		$result = [];
		$post = $this->input->post();
		$password = $post['password'];

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		if (!empty($password) || !empty($post['repass'])) {
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('repass', 'Ulangi Password', 'trim|required|matches[password]');			
		}

		$tgl = tgl_indo(date('Y-m-d'));
		$hari = nama_hari(date('Y-m-d'));

		if ($this->form_validation->run() == true){
			if ($password == '') {
				$data = array(
					'username' => $post['username']
					);
			}
			else{
				$data = array(
					'username' => $post['username'],
					'password' => md5($post['password'])
					);				
			}
			$x = $this->m_global->get_data_all('user', null, [strEncrypt('id', TRUE)=>$id]);
			if($x) {
				if(strEncrypt($x[0]->id) !== $id) {
					$result['msg'] = 'Data tidak berhasil diperbarui !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('user', $data, [strEncrypt('id', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Profil berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Profil gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('user', $data, [strEncrypt('id', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Profil berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Profil gagal perbarui !';
					$result['sts'] = '0';
				}
			}
		}
		else {
			$result['msg'] = validation_errors();
			$result['sts'] = '0';
		}
		
		echo json_encode($result);

	}

}

/* End of file Login */
/* Location: ./application/controllers/Login */