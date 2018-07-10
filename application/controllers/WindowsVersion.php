<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WindowsVersion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->SecurityModel->auth();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Windows Version | IT Assets'; // yang ditampilkan di title
		$data['judul'] = 'Windows Version'; 
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li class="active">WindowsVersion </li>';
		$data['view'] = 'master_data/windowsversion/index'; //yang ngelink jadi ngk usah pake spasi (tempat data viewnya)
		$data['windowsversion'] = $this->m_global->get_data_all('windowsversion');
		$this->load->view('master_template', $data);
	
	}


	public function add()
	{
		$data['title'] = 'Tambah Data';
		$data['judul'] = 'Tambah Data Windows Version';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard active"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'windowsversion">WindowsVersion</a></li><li class="active">Tambah data</li>';
		$data['view'] = 'master_data/windowsversion/add';

		$this->load->view('master_template', $data);
		
	}

	public function act_add()
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'Windows ID', 'trim|required|numeric');
		$this->form_validation->set_rules('nama', 'Windows Version', 'trim|required');
		$this->form_validation->set_rules('productkey', 'Product Key', 'trim|required');

		if ($this->form_validation->run() == true){
			$data = array(
				'winID' => $post['kode'],
				'winversion' => $post['nama'],
				'productkey' => $post['productkey']
				);
			$proses = $this->m_global->insert('windowsversion', $data);
			if($proses) {
				$result['msg'] = 'Data windows version berhasil ditambahkan !';
				$result['sts'] = '1';
			} 
			else {
				$result['msg'] = 'Data windows version gagal ditambahkan !';
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
		$data['judul'] = 'Edit Data Windows Version';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'winversion">WindowsVersion</a></li><li class="active">Edit Data</li>';
		$data['view'] = 'master_data/windowsversion/edit';

		$data['detail'] = $this->m_global->get_data_all('windowsversion', null, [strEncrypt('winID', TRUE) => $id]);

		$this->load->view('master_template', $data);


	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'Windows ID', 'trim|required|numeric');
		$this->form_validation->set_rules('nama', 'Windows Version', 'trim|required');
		$this->form_validation->set_rules('productkey', 'Product Key', 'trim|required');

		if ($this->form_validation->run() == true){
			$data = array(
				'winID' => $post['kode'],
				'winversion' => $post['nama'],
				'productkey' => $post['productkey']
				);			
			
			$x = $this->m_global->get_data_all('windowsversion', null, ['winID' => $data['winID']]);
			if($x) {
				if(strEncrypt($x[0]->winID) !== $id) {
					$result['msg'] = 'Windows ID sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('windowsversion', $data, [strEncrypt('winID', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Data Windows ID berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Data Windows ID gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('windowsversion', $data, [strEncrypt('winID', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Data Windows ID berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Data Windows ID gagal perbarui !';
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


	public function hapus(){
		$id = $this->input->post('id');
		$proses = $this->m_global->delete('windowsversion',['winID'=>$id]);

		if($proses) {
			$result['msg'] = 'Data Windows ID berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data Windows ID gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}

}

/* End of file WindowsVersion.php */
/* Location: ./application/controllers/WindowsVersion.php */