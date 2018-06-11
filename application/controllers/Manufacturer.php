<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->SecurityModel->auth();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Manufacturer | IT Assets';
		$data['judul'] = 'Manufacturer';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li class="active">Manufacturer</li>';
		$data['view'] = 'master_data/manufacturer/index';
		$data['manufacturer'] = $this->m_global->get_data_all('manufacturer');
		$this->load->view('master_template', $data);
	
	}


	public function add()
	{
		$data['title'] = 'Tambah Data';
		$data['judul'] = 'Tambah Data Manufacturer';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard active"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'manufacturer">Manufacturer</a></li><li class="active">Tambah data</li>';
		$data['view'] = 'master_data/manufacturer/add';

		$this->load->view('master_template', $data);
		
	}

	public function act_add()
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'Kode Manufacturer', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Manufacturer', 'trim|required');


		if ($this->form_validation->run() == true){
			$data = array(
				'kode_manufacturer' => $post['kode'],
				'manufacturer' => $post['nama']
				);
			$proses = $this->m_global->insert('manufacturer', $data);
			if($proses) {
				$result['msg'] = 'Data manufacturer berhasil ditambahkan !';
				$result['sts'] = '1';
			} 
			else {
				$result['msg'] = 'Data manufacturer gagal ditambahkan !';
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
		$data['judul'] = 'Edit Data Manufacturer';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'manufacturer">Manufacturer</a></li><li class="active">Edit Data</li>';
		$data['view'] = 'master_data/manufacturer/edit';

		$data['detail'] = $this->m_global->get_data_all('manufacturer', null, [strEncrypt('kode_manufacturer', TRUE) => $id]);

		$this->load->view('master_template', $data);


	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'Kode Manufacturer', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Manufacturer', 'trim|required');

		if ($this->form_validation->run() == true){
			$data = array(
					'kode_manufacturer' => $post['kode'],
					'manufacturer' => $post['nama']
					);				
			
			$x = $this->m_global->get_data_all('manufacturer', null, ['kode_manufacturer' => $data['kode_manufacturer']]);
			if($x) {
				if(strEncrypt($x[0]->kode_manufacturer) !== $id) {
					$result['msg'] = 'Kode Manufacturer sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('manufacturer', $data, [strEncrypt('kode_manufacturer', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Data Manufacturer berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Data Manufacturer gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('manufacturer', $data, [strEncrypt('kode_manufacturer', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Data Manufacturer berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Data Manufacturer gagal perbarui !';
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
		$proses = $this->m_global->delete('manufacturer',['kode_manufacturer'=>$id]);

		if($proses) {
			$result['msg'] = 'Data Manufacturer berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data Manufacturer gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}

}

/* End of file Manufacturer.php */
/* Location: ./application/controllers/Manufacturer.php */