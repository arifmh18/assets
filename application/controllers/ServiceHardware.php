<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceHardware extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->SecurityModel->auth();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Model | IT Assets';
		$data['judul'] = 'Model';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li class="active">Model</li>';
		$data['view'] = 'master_data/model/index';
		$data['model'] = $this->m_global->get_data_all('model');
		$this->load->view('master_template', $data);
	
	}


	public function add()
	{
		$data['title'] = 'Tambah Data';
		$data['judul'] = 'Tambah Data Model';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard active"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'model">Model</a></li><li class="active">Tambah data</li>';
		$data['view'] = 'master_data/model/add';

		$this->load->view('master_template', $data);
		
	}

	public function act_add()
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'Kode Model', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Model', 'trim|required');


		if ($this->form_validation->run() == true){
			$data = array(
				'kode_model' => $post['kode'],
				'model' => $post['nama']
				);
			$proses = $this->m_global->insert('model', $data);
			if($proses) {
				$result['msg'] = 'Data model berhasil ditambahkan !';
				$result['sts'] = '1';
			} 
			else {
				$result['msg'] = 'Data model gagal ditambahkan !';
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
		$data['judul'] = 'Edit Data Model';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'model">Model</a></li><li class="active">Edit Data</li>';
		$data['view'] = 'master_data/model/edit';

		$data['detail'] = $this->m_global->get_data_all('model', null, [strEncrypt('kode_model', TRUE) => $id]);

		$this->load->view('master_template', $data);


	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'Kode Model', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Model', 'trim|required');

		if ($this->form_validation->run() == true){
			$data = array(
					'kode_model' => $post['kode'],
					'model' => $post['nama']
					);				
			
			$x = $this->m_global->get_data_all('model', null, ['kode_model' => $data['kode_model']]);
			if($x) {
				if(strEncrypt($x[0]->kode_model) !== $id) {
					$result['msg'] = 'Kode Model sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('model', $data, [strEncrypt('kode_model', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Data Model berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Data Model gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('model', $data, [strEncrypt('kode_model', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Data Model berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Data Model gagal perbarui !';
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
		$proses = $this->m_global->delete('model',['kode_model'=>$id]);

		if($proses) {
			$result['msg'] = 'Data Model berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data Model gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}

}

/* End of file Model.php */
/* Location: ./application/controllers/Model.php */