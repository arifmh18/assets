<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->SecurityModel->auth();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'User | IT Assets';
		$data['judul'] = 'User';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li class="active">User</li>';
		$data['view'] = 'master_data/User/index';
		$data['user'] = $this->m_global->get_data_all('user_karyawan');
		$data['lokasi'] = $this->m_global->get_data_all('lokasi');
		$data['unit'] = $this->m_global->get_data_all('unit');
		$this->load->view('master_template', $data);
	
	}

public function add()
	{
		$data['title'] = 'Tambah Data';
		$data['judul'] = 'Tambah Data User';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard active"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'User">User</a></li><li class="active">Tambah data</li>';
		$data['view'] = 'master_data/user/add';
		$data['unit'] = $this->m_global->get_data_all('unit');
		$data['lokasi'] = $this->m_global->get_data_all('lokasi');

		$this->load->view('master_template', $data);
		
	}

	public function act_add()
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('nobadge', 'No Badge', 'trim|required|numeric');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('unit', 'Unit', 'trim|required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
		if ($this->form_validation->run() == true){
			$data = array(
				'no_badge' => $post['nobadge'],
				'username' => $post['username'],
				'email' => $post['email'],
				'jabatan' => $post['jabatan'],
				'unitname' => $post['unit'],
				'lokasi' => $post['lokasi']
				);
			$proses = $this->m_global->insert('user_karyawan', $data);
			if($proses) {
				$result['msg'] = 'Data User berhasil ditambahkan !';
				$result['sts'] = '1';
			} 
			else {
				$result['msg'] = 'Data User gagal ditambahkan !';
				$result['sts'] = '0';
			}
		}
		else {
			$result['msg'] = validation_errors();
			$result['sts'] = '0';
		}
		
		echo json_encode($result);


	}

	public function edit($id){
		$data['title'] = 'Edit Data ';
		$data['judul'] = 'Edit Data User';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'User">User</a></li><li class="active">Edit Data</li>';
		$data['view'] = 'master_data/user/edit';

		$data['detail'] = $this->m_global->get_data_all('user_karyawan', null, [strEncrypt('no_badge', TRUE) => $id]);
		$data['unit'] = $this->m_global->get_data_all('unit');
		$data['lokasi'] = $this->m_global->get_data_all('lokasi');

		$this->load->view('master_template', $data);


	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('nobadge', 'No Badge', 'trim|required|numeric');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('unit', 'Unit', 'trim|required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
		if ($this->form_validation->run() == true){
			$data = array(
				'no_badge' => $post['nobadge'],
				'username' => $post['username'],
				'email' => $post['email'],
				'jabatan' => $post['jabatan'],
				'unitname' => $post['unit'],
				'lokasi' => $post['lokasi']
				);	
			
			$x = $this->m_global->get_data_all('user_karyawan', null, ['no_badge' => $data['no_badge']]);
			if($x) {
				if(strEncrypt($x[0]->no_badge) !== $id) {
					$result['msg'] = 'No Badge sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('user_karyawan', $data, [strEncrypt('no_badge', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Data User berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Data User gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('user_karyawan', $data, [strEncrypt('no_badge', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Data User berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Data User gagal perbarui !';
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

	// public function detail($id){
	// 	$data['title'] = 'Detail User';
	// 	$data['judul'] = 'Detail Data User';
	// 	$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'User">User</a></li><li class="active">Detail Data</li>';
	// 	$data['view'] = 'master_data/User/detail';

	// 	$data['detail'] = $this->m_global->get_data_all('User', [['model','User.model = kode_model'],['manufacturer','User.manufacturer = kode_manufacturer']], [strEncrypt('hardware_IDS', TRUE) => $id]);
	// 	$this->load->view('master_template', $data);

	// }


	public function hapus(){
		$id = $this->input->post('id');
		$proses = $this->m_global->delete('user_karyawan',['no_badge'=>$id]);

		if($proses) {
			$result['msg'] = 'Data User berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data User gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}


}

/* End of file User.php */
/* Location: ./application/controllers/User.php */