<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->SecurityModel->auth();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Unit | IT Assets';
		$data['judul'] = 'Unit';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li class="active">Unit</li>';
		$data['view'] = 'master_data/unit/index';
		$data['unit'] = $this->m_global->get_data_all('unit');
		$this->load->view('master_template', $data);
	
	}


	public function add()
	{
		$data['title'] = 'Tambah Data';
		$data['judul'] = 'Tambah Data Unit';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard active"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'unit">Unit</a></li><li class="active">Tambah data</li>';
		$data['view'] = 'master_data/unit/add';

		$this->load->view('master_template', $data);
		
	}

	public function act_add()
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'Kode Unit', 'numeric');
		$this->form_validation->set_rules('nama', 'Unit Kerja');
		$this->form_validation->set_rules('lokasi', 'Lokasi');

		if ($this->form_validation->run() == true){
			$data = array(
				'unitcode' => $post['kode'],
				'unitkerja' => $post['nama'],
				'lokasi' => $post['lokasi']
				);
			$proses = $this->m_global->insert('unit', $data);
			if($proses) {
				$result['msg'] = 'Data unit berhasil ditambahkan !';
				$result['sts'] = '1';
			} 
			else {
				$result['msg'] = 'Data unit gagal ditambahkan !';
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
		$data['judul'] = 'Edit Data Unit';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'unit">Unit</a></li><li class="active">Edit Data</li>';
		$data['view'] = 'master_data/unit/edit';

		$data['detail'] = $this->m_global->get_data_all('unit', null, [strEncrypt('unitcode', TRUE) => $id]);

		$this->load->view('master_template', $data);


	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'Kode Unit', 'numeric');
		$this->form_validation->set_rules('nama', 'Unit Kerja');
		$this->form_validation->set_rules('lokasi', 'Lokasi');

		if ($this->form_validation->run() == true){
			$data = array(
					'unitcode' => $post['kode'],
					'unitkerja' => $post['nama'],
					'lokasi' => $post['lokasi'],
					);				
			
			$x = $this->m_global->get_data_all('unit', null, ['unitcode' => $data['unitcode']]);
			if($x) {
				if(strEncrypt($x[0]->unitcode) !== $id) {
					$result['msg'] = 'Kode Unit sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('unit', $data, [strEncrypt('unitcode', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Data Unit berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Data Unit gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('unit', $data, [strEncrypt('unitcode', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Data Unit berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Data Unit gagal perbarui !';
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
		$proses = $this->m_global->delete('unit',['unitcode'=>$id]);

		if($proses) {
			$result['msg'] = 'Data Unit berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data Unit gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}

}

/* End of file Unit.php */
/* Location: ./application/controllers/Unit.php */