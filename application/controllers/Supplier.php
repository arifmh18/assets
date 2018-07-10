<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->SecurityModel->auth();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Supplier | IT Assets';
		$data['judul'] = 'Supplier';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li class="active">Supplier</li>';
		$data['view'] = 'master_data/supplier/index';
		$data['supplier'] = $this->m_global->get_data_all('supplier');
		$this->load->view('master_template', $data);
	
	}


	public function add()
	{
		$data['title'] = 'Tambah Data';
		$data['judul'] = 'Tambah Data Supplier';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard active"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'supplier">Supplier</a></li><li class="active">Tambah data</li>';
		$data['view'] = 'master_data/supplier/add';

		$this->load->view('master_template', $data);
		
	}

	public function act_add()
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'ID Supplier', 'trim|required|numeric');
		$this->form_validation->set_rules('nama', 'Nama Supplier', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');


		if ($this->form_validation->run() == true){
			$data = array(
				'idsupplier' => $post['kode'],
				'namasup' => $post['nama'],
				'status' => $post['status']
				);
			$proses = $this->m_global->insert('supplier', $data);
			if($proses) {
				$result['msg'] = 'Data supplier berhasil ditambahkan !';
				$result['sts'] = '1';
			} 
			else {
				$result['msg'] = 'Data supplier gagal ditambahkan !';
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
		$data['judul'] = 'Edit Data Supplier';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'supplier">Supplier</a></li><li class="active">Edit Data</li>';
		$data['view'] = 'master_data/supplier/edit';

		$data['detail'] = $this->m_global->get_data_all('supplier', null, [strEncrypt('idsupplier', TRUE) => $id]);

		$this->load->view('master_template', $data);


	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'ID Supplier', 'trim|required|numeric');
		$this->form_validation->set_rules('nama', 'Nama Supplier', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		if ($this->form_validation->run() == true){
			$data = array(
					'idsupplier' => $post['kode'],
					'namasup' => $post['nama'],
					'status' => $post['status']
					);				
			
			$x = $this->m_global->get_data_all('supplier', null, ['idsupplier' => $data['idsupplier']]);
			if($x) {
				if(strEncrypt($x[0]->idsupplier) !== $id) {
					$result['msg'] = 'ID  Supplier sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('supplier', $data, [strEncrypt('idsupplier', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Data Supplier berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Data Supplier gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('supplier', $data, [strEncrypt('idsupplier', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Data Supplier berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Data Supplier gagal perbarui !';
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
		$proses = $this->m_global->delete('supplier',['idsupplier'=>$id]);

		if($proses) {
			$result['msg'] = 'Data Supplier berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data Supplier gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}

}

/* End of file Supplier.php */
/* Location: ./application/controllers/Supplier.php */