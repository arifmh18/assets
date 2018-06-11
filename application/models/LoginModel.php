<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function authen($e, $p)
	{
		$pass = md5($p);
		$this->db->where('username', $e);
		$this->db->where('password', $pass);
		$query = $this->db->get('user');

		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				$sess = array('username' => $row->username,
							'id' => $row->id,
							'level' => $row->level
							);
				
				$this->session->set_userdata($sess);
				redirect('dashboard');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger"> Maaf <strong>Username atau Password </strong> anda salah.</div>');
			redirect('login');
		}
	}
}

/* End of file LoginModel.php */
/* Location: ./application/models/LoginModel.php */