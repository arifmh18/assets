<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->SecurityModel->auth();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Lokasi | IT Assets';
		$data['judul'] = 'Lokasi';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li class="active">Lokasi</li>';
		$data['view'] = 'master_data/lokasi/index';
		$data['lokasi'] = $this->m_global->get_data_all('lokasi');
		$this->load->view('master_template', $data);
	
	}


	public function add()
	{
		$data['title'] = 'Tambah Data';
		$data['judul'] = 'Tambah Data Lokasi';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard active"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'lokasi">Lokasi</a></li><li class="active">Tambah data</li>';
		$data['view'] = 'master_data/lokasi/add';

		$this->load->view('master_template', $data);
		
	}

	public function act_add()
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'Kode Lokasi', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Lokasi', 'trim|required');


		if ($this->form_validation->run() == true){
			$data = array(
				'code_loc' => $post['kode'],
				'lokasi' => $post['nama']
				);
			$proses = $this->m_global->insert('lokasi', $data);
			if($proses) {
				$result['msg'] = 'Data Lokasi berhasil ditambahkan !';
				$result['sts'] = '1';
			} 
			else {
				$result['msg'] = 'Data Lokasi gagal ditambahkan !';
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
		$data['judul'] = 'Edit Data Lokasi';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'lokasi">Lokasi</a></li><li class="active">Edit Data</li>';
		$data['view'] = 'master_data/lokasi/edit';

		$data['detail'] = $this->m_global->get_data_all('lokasi', null, [strEncrypt('code_loc', TRUE) => $id]);

		$this->load->view('master_template', $data);


	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'Kode Lokasi', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Lokasi', 'trim|required');

		if ($this->form_validation->run() == true){
			$data = array(
					'code_loc' => $post['kode'],
					'lokasi' => $post['nama']
					);				
			
			$x = $this->m_global->get_data_all('lokasi', null, ['code_lokasi' => $data['code_loc']]);
			if($x) {
				if(strEncrypt($x[0]->code_loc) !== $id) {
					$result['msg'] = 'Kode Lokasi sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('lokasi', $data, [strEncrypt('code_lokasi', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Data Lokasi berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Data Lokasi gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('lokasi', $data, [strEncrypt('code_loc', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Data Lokasi berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Data Lokasi gagal perbarui !';
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
		$proses = $this->m_global->delete('lokasi',['code_loc'=>$id]);

		if($proses) {
			$result['msg'] = 'Data Lokasi berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data Lokasi gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}

}

/* End of file lokasi.php */
/* Location: ./application/controllers/lokasi.php */