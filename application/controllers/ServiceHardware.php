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
		$data['title'] = 'Service Hardware | IT Assets';
		$data['judul'] = 'Service Hardware';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li class="active">Service Hardware</li>';
		$data['view'] = 'master_data/servicehardware/index';
		$data['servicehardware'] = $this->m_global->get_data_all('servicehardware');
		$data['hardware'] = $this->m_global->get_data_all('hardware');
		$this->load->view('master_template', $data);
	
	}

	public function add()
	{
		$data['title'] = 'Tambah Data';
		$data['judul'] = 'Tambah Data Service Hardware';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard active"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'servicehardware">Service Hardware</a></li><li class="active">Tambah data</li>';
		$data['view'] = 'master_data/servicehardware/add';
		$data['hardware'] = $this->m_global->get_data_all('hardware');
		$this->load->view('master_template', $data);
		
	}

	public function hardware()
	{
		$this->load->model('m_autocomplete');
		if (isset($_GET['term'])) {
            $result = $this->m_autocomplete->get_data('hardware', $_GET['term'], 'hardwareID');
            								//get_data('nama table', biarin gitu,'field yang dibuat kondisi');
            if (count($result) > 0) {
				foreach ($result as $row)
				$arr_result[] = array(
					'hardwareID' => $row->hardwareID,
					'aset' => $row->aset,
					'username' => $row->username,
					'unitcode' => $row->unitcode,
					'unitkerja' => $row->unitkerja,
					'model' => $row->model,
					'serialnumber' => $row->serialnumber,
					'manufacturer' => $row->manufacturer,
					'product' => $row->product,
					);
				echo json_encode($arr_result);
				}
        }
	}

	public function act_add()
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('ID', 'No Service', 'trim|required|numeric');
		$this->form_validation->set_rules('tglservice', 'Tanggal Service', 'trim|required');
		$this->form_validation->set_rules('hardwareID', 'Hardware ID', 'trim|required');
		$this->form_validation->set_rules('aset', 'Aset', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('unitcode', 'Kode Unit', 'trim|required');
		$this->form_validation->set_rules('unitkerja', 'Unit Kerja', 'trim|required');
		$this->form_validation->set_rules('model', 'Model', 'trim|required');
		$this->form_validation->set_rules('serialnumber', 'Serial Number', 'trim|required');
		$this->form_validation->set_rules('manufacturer', 'Manufacturer', 'trim|required');
		$this->form_validation->set_rules('product', 'Product', 'trim|required');
		$this->form_validation->set_rules('remarks', 'Remark', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('tglkeluar', 'Tanggal Keluar');
		if ($post['tglservice'] > $post['tglkeluar']) {
				$result['msg'] = 'Tanggal Service Tidak Boleh Melebihi Tanggal Keluar';
				$result['sts'] = '0';
			}
		else{
			if ($this->form_validation->run() == true){
				$data = array(
					'noservice' => $post['ID'],
					'tglservice' => $post['tglservice'],
					'hardwareID' => $post['hardwareID'],
					'aset' => $post['aset'],
					'username' => $post['username'],
					'unitcode' => $post['unitcode'],
					'unitkerja' => $post['unitkerja'],
					'model' => $post['model'],
					'serialnumber' => $post['serialnumber'],
					'manufacturer' => $post['manufacturer'],
					'product' => $post['product'],
					'remarks' => $post['remarks'],
					'status' => $post['status'],
					'tglkeluar' => $post['tglkeluar']
					);
				$proses = $this->m_global->insert('servicehardware', $data);
				if($proses) {
					$result['msg'] = 'Data Service Hardware berhasil ditambahkan !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Data Service Hardware gagal ditambahkan !';
					$result['sts'] = '0';
				}
			}
			else {
				$result['msg'] = validation_errors();
				$result['sts'] = '0';
			}
		}
		echo json_encode($result);


	}

	public function edit($id){
		$data['title'] = 'Edit Data ';
		$data['judul'] = 'Edit Data Service Hardware';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'servicehardware">Service Hardware</a></li><li class="active">Edit Data</li>';
		$data['view'] = 'master_data/servicehardware/edit';

		$data['detail'] = $this->m_global->get_data_all('servicehardware', null, [strEncrypt('noservice', TRUE) => $id]);
		$data['hardware'] = $this->m_global->get_data_all('hardware');
		$this->load->view('master_template', $data);


	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('ID', 'No Service', 'trim|required|numeric');
		$this->form_validation->set_rules('tglservice', 'Tanggal Service', 'trim|required');
		$this->form_validation->set_rules('hardwareID', 'Hardware ID', 'trim|required');
		$this->form_validation->set_rules('aset', 'Aset', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('unitcode', 'Kode Unit', 'trim|required');
		$this->form_validation->set_rules('unitkerja', 'Unit Kerja', 'trim|required');
		$this->form_validation->set_rules('model', 'Model', 'trim|required');
		$this->form_validation->set_rules('serialnumber', 'Serial Number', 'trim|required');
		$this->form_validation->set_rules('manufacturer', 'Manufacturer', 'trim|required');
		$this->form_validation->set_rules('product', 'Product', 'trim|required');
		$this->form_validation->set_rules('remarks', 'Remark', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('tglkeluar', 'Tanggal Keluar');
		if ($post['tglservice'] > $post['tglkeluar']) {
				$result['msg'] = 'Tanggal Service Tidak Boleh Melebihi Tanggal Keluar';
				$result['sts'] = '0';
			}
		else{

			if ($this->form_validation->run() == true){
				$data = array(
					'noservice' => $post['ID'],
					'tglservice' => $post['tglservice'],
					'hardwareID' => $post['hardwareID'],
					'aset' => $post['aset'],
					'username' => $post['username'],
					'unitcode' => $post['unitcode'],
					'unitkerja' => $post['unitkerja'],
					'model' => $post['model'],
					'serialnumber' => $post['serialnumber'],
					'manufacturer' => $post['manufacturer'],
					'product' => $post['product'],
					'remarks' => $post['remarks'],
					'status' => $post['status'],
					'tglkeluar' => $post['tglkeluar']
					);	
				
				$x = $this->m_global->get_data_all('servicehardware', null, ['noservice' => $data['noservice']]);
				if($x) {
					if(strEncrypt($x[0]->noservice) !== $id) {
						$result['msg'] = 'No Service sudah ada !';
						$result['sts'] = '0';
					}
					else{
						$proses = $this->m_global->update('servicehardware', $data, [strEncrypt('noservice', TRUE) => $id]);
						if($proses) {
							$result['msg'] = 'Data Servis Hardware berhasil perbarui !';
							$result['sts'] = '1';
						} 
						else {
							$result['msg'] = 'Data Service Hardware gagal perbarui !';
							$result['sts'] = '0';
						}
					}
				}
				else{
					$proses = $this->m_global->update('servicehardware', $data, [strEncrypt('noservice', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Data Service Hardware berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Data Service Hardware gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else {
				$result['msg'] = validation_errors();
				$result['sts'] = '0';
			}
		}
		echo json_encode($result);


	}

	public function detail($id){
		$data['title'] = 'Detail Service Hardware';
		$data['judul'] = 'Detail Data Service Hardware';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'servicehardware">Service Hardware</a></li><li class="active">Detail Data</li>';
		$data['view'] = 'master_data/servicehardware/detail';
		
		$data['detail'] = $this->m_global->get_data_all('servicehardware', null, [strEncrypt('noservice', TRUE) => $id]);
		$this->load->view('master_template', $data);

	}


	public function hapus(){
		$id = $this->input->post('id');
		$proses = $this->m_global->delete('servicehardware',['noservice'=>$id]);

		if($proses) {
			$result['msg'] = 'Data Service Hardware berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data Service Hardware gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}


}

/* End of file ServiceHardware.php */
/* Location: ./application/controllers/ServiceHardware.php */