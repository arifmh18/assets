<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spesifikasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->SecurityModel->auth();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Spesifikasi | IT Assets';
		$data['judul'] = 'Spesifikasi';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li class="active">Spesifikasi</li>';
		$data['view'] = 'master_data/spesifikasi/index';
		$data['spesifikasi'] = $this->m_global->get_data_all('spesifikasi');
		$data['model'] = $this->m_global->get_data_all('model');
		$data['manufacturer'] = $this->m_global->get_data_all('manufacturer');
		$this->load->view('master_template', $data);
	
	}

public function add()
	{
		$data['title'] = 'Tambah Data';
		$data['judul'] = 'Tambah Data Spesifikasi';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard active"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'spesifikasi">Spesifikasi</a></li><li class="active">Tambah data</li>';
		$data['view'] = 'master_data/spesifikasi/add';
		$data['manufacturer'] = $this->m_global->get_data_all('manufacturer');
		$data['model'] = $this->m_global->get_data_all('model');

		$this->load->view('master_template', $data);
		
	}

	public function act_add()
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('ID', 'Hardware ID', 'trim|required');
		$this->form_validation->set_rules('model', 'Model', 'trim|required');
		$this->form_validation->set_rules('product', 'Product', 'trim|required');
		$this->form_validation->set_rules('serialnumber', 'Serial Number', 'trim|required');
		$this->form_validation->set_rules('manufacturer', 'Manufacturer', 'trim|required');
		$this->form_validation->set_rules('processors', 'Processors', 'trim|required');
		$this->form_validation->set_rules('memorytype', 'Memory Type', 'trim|required');
		$this->form_validation->set_rules('memorysize', 'Memory Size', 'trim|required');
		$this->form_validation->set_rules('memorymax', 'Memory Max', 'trim|required|numeric');
		$this->form_validation->set_rules('memorydim1', 'Memory Dim 1', 'trim|required');
		$this->form_validation->set_rules('memorydim2', 'Memory Dim 2', 'trim|required');
		$this->form_validation->set_rules('memorydim3', 'Memory Dim 3', 'trim|required');
		$this->form_validation->set_rules('memorydim4', 'Memory Dim 4', 'trim|required');
		if ($this->form_validation->run() == true){
			$data = array(
				'hardware_IDS' => $post['ID'],
				'model' => $post['model'],
				'product' => $post['product'],
				'serialnumber' => $post['serialnumber'],
				'manufacturer' => $post['manufacturer'],
				'processors' => $post['processors'],
				'memorytype' => $post['memorytype'],
				'memorysize' => $post['memorysize'],
				'memorymax' => $post['memorymax'],
				'memorydim1' => $post['memorydim1'],
				'memorydim2' => $post['memorydim2'],
				'memorydim3' => $post['memorydim3'],
				'memorydim4' => $post['memorydim4']
				);
			$proses = $this->m_global->insert('spesifikasi', $data);
			if($proses) {
				$result['msg'] = 'Data Spesifikasi berhasil ditambahkan !';
				$result['sts'] = '1';
			} 
			else {
				$result['msg'] = 'Data Spesifikasi gagal ditambahkan !';
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
		$data['judul'] = 'Edit Data Spesifikasi';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'spesifikasi">Spesifikasi</a></li><li class="active">Edit Data</li>';
		$data['view'] = 'master_data/spesifikasi/edit';

		$data['detail'] = $this->m_global->get_data_all('spesifikasi', null, [strEncrypt('hardware_IDS', TRUE) => $id]);
		$data['model'] = $this->m_global->get_data_all('model');
		$data['manufacturer'] = $this->m_global->get_data_all('manufacturer');

		$this->load->view('master_template', $data);


	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('ID', 'Hardware ID', 'trim|required');
		$this->form_validation->set_rules('model', 'Model', 'trim|required');
		$this->form_validation->set_rules('product', 'Product', 'trim|required');
		$this->form_validation->set_rules('serialnumber', 'Serial Number', 'trim|required');
		$this->form_validation->set_rules('manufacturer', 'Manufacturer', 'trim|required');
		$this->form_validation->set_rules('processors', 'Processors', 'trim|required');
		$this->form_validation->set_rules('memorytype', 'Memory Type', 'trim|required');
		$this->form_validation->set_rules('memorysize', 'Memory Size', 'trim|required');
		$this->form_validation->set_rules('memorymax', 'Memory Max', 'trim|required');
		$this->form_validation->set_rules('memorydim1', 'Memory Dim 1', 'trim|required');
		$this->form_validation->set_rules('memorydim2', 'Memory Dim 2', 'trim|required');
		$this->form_validation->set_rules('memorydim3', 'Memory Dim 3', 'trim|required');
		$this->form_validation->set_rules('memorydim4', 'Memory Dim 4', 'trim|required');
		if ($this->form_validation->run() == true){
			$data = array(
				'hardware_IDS' => $post['ID'],
				'model' => $post['model'],
				'product' => $post['product'],
				'serialnumber' => $post['serialnumber'],
				'manufacturer' => $post['manufacturer'],
				'processors' => $post['processors'],
				'memorytype' => $post['memorytype'],
				'memorysize' => $post['memorysize'],
				'memorymax' => $post['memorymax'],
				'memorydim1' => $post['memorydim1'],
				'memorydim2' => $post['memorydim2'],
				'memorydim3' => $post['memorydim3'],
				'memorydim4' => $post['memorydim4']
				);	
			
			$x = $this->m_global->get_data_all('spesifikasi', null, ['hardware_IDS' => $data['hardware_IDS']]);
			if($x) {
				if(strEncrypt($x[0]->hardware_IDS) !== $id) {
					$result['msg'] = 'Kode Spesifikasi sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('spesifikasi', $data, [strEncrypt('hardware_IDS', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Data Spesifikasi berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Data Spesifikasi gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('spesifikasi', $data, [strEncrypt('hardware_IDS', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Data Spesifikasi berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Data Spesifikasi gagal perbarui !';
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

	public function detail($id){
		$data['title'] = 'Detail Spesifikasi';
		$data['judul'] = 'Detail Data Spesifikasi';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'spesifikasi">Spesifikasi</a></li><li class="active">Detail Data</li>';
		$data['view'] = 'master_data/spesifikasi/detail';

		$data['detail'] = $this->m_global->get_data_all('spesifikasi', [['model','spesifikasi.model = kode_model'],['manufacturer','spesifikasi.manufacturer = kode_manufacturer']], [strEncrypt('hardware_IDS', TRUE) => $id]);
		$this->load->view('master_template', $data);

	}


	public function hapus(){
		$id = $this->input->post('id');
		$proses = $this->m_global->delete('spesifikasi',['hardware_IDS'=>$id]);

		if($proses) {
			$result['msg'] = 'Data Spesifikasi berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data Spesifikasi gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}


}

/* End of file Spesifikasi.php */
/* Location: ./application/controllers/Spesifikasi.php */