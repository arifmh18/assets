<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hardware extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->SecurityModel->auth();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Hardware | IT Assets';
		$data['judul'] = 'Hardware';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li class="active">Hardware</li>';
		$data['view'] = 'master_data/hardware/index';
		// $data['spesifikasi'] = $this->m_global->get_data_all('spesifikasi');
		//$data['supplier'] = $this->m_global->get_data_all('supplier');
		// $data['unitkerja'] = $this->m_global->get_data_all('unitkerja');
		//$data['windowsversion'] = $this->m_global->get_data_all('windowsversion');
		$this->load->view('master_template', $data);
	
	}

public function add()
	{
		$data['title'] = 'Tambah Data';
		$data['judul'] = 'Tambah Data Hardware';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard active"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'hardware">Hardware</a></li><li class="active">Tambah data</li>';
		$data['view'] = 'master_data/hardware/add';
		

		$this->load->view('master_template', $data);
		
	}

	public function act_add()
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('ID', 'Hardware ID', 'trim|required');
		$this->form_validation->set_rules('tglmsk', 'Tanggal Masuk');
		$this->form_validation->set_rules('aset', 'Aset', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('unitcode', 'Kode Unit', 'trim|required');
		$this->form_validation->set_rules('unitkerja', 'Unit Kerja', 'trim|required');
		$this->form_validation->set_rules('compname', 'Computer Name', 'trim|required');
		$this->form_validation->set_rules('model', 'Model', 'trim|required');
		$this->form_validation->set_rules('serialnumber', 'Serial Number', 'trim|required');
		$this->form_validation->set_rules('manufacturer', 'Manufacturer', 'trim|required');
		$this->form_validation->set_rules('product', 'Product', 'trim|required');
		$this->form_validation->set_rules('processors', 'Processors', 'trim|required');
		$this->form_validation->set_rules('macadd', 'Mac Address', 'trim|required');
		$this->form_validation->set_rules('macaddwifi', 'Mac Address Wifi', 'trim|required');
		$this->form_validation->set_rules('memorytype', 'Memory Type', 'trim|required');
		$this->form_validation->set_rules('memorysize', 'Memory Size', 'trim|required');
		$this->form_validation->set_rules('memorymax', 'Memory Max', 'trim|required|numeric');
		$this->form_validation->set_rules('memorydim1', 'Memory Dim 1', 'trim|required');
		$this->form_validation->set_rules('memorydim2', 'Memory Dim 2', 'trim|required');
		$this->form_validation->set_rules('memorydim3', 'Memory Dim 3', 'trim|required');
		$this->form_validation->set_rules('memorydim4', 'Memory Dim 4', 'trim|required');
		$this->form_validation->set_rules('winOSID', 'Windows OS ID', 'trim|required');
		$this->form_validation->set_rules('winOSver', 'Windows OS Version', 'trim|required');
		$this->form_validation->set_rules('winOSpk', 'Windows OS Product Key', 'trim|required');
		$this->form_validation->set_rules('winlabelID', 'Windows Label ID ', 'trim|required');
		$this->form_validation->set_rules('winlabelver', 'Windows Label Version', 'trim|required');
		$this->form_validation->set_rules('winlabelpk', 'WIndows Label Poduct Key', 'trim|required');
		if ($this->form_validation->run() == true){
			$data = array(
				'hardwareID' => $post['ID'],
				'tglmsk' => $post['tglmsk'],
				'aset' => $post['aset'],
				'status' => $post['status'],
				'username' => $post['username'],
				'unitcode' => $post['unitcode'],
				'unitkerja' => $post['unitkerja'],
				'compname' => $post['compname'],
				'model' => $post['model'],
				'serialnumber' => $post['serialnumber'],
				'manufacturer' => $post['manufacturer'],
				'product' => $post['product'],
				'processors' => $post['processors'],
				'macadd' => $post['macadd'],
				'macaddwifi' => $post['macaddwifi'],
				'memorytype' => $post['memorytype'],
				'memorysize' => $post['memorysize'],
				'memorymax' => $post['memorymax'],
				'memorydim1' => $post['memorydim1'],
				'memorydim2' => $post['memorydim2'],
				'memorydim3' => $post['memorydim3'],
				'memorydim4' => $post['memorydim4'],
				'winOSID' => $post['winOSID'],
				'winOSver' => $post['winOSver'],
				'winOSpk' => $post['winOSpk'],
				'winlabelID' => $post['winlabelID'],
				'winlabelver' => $post['winlabelver'],
				'winlabelpk' => $post['winlabelpk']
				);
			$proses = $this->m_global->insert('hardware', $data);
			if($proses) {
				$result['msg'] = 'Data Hardware berhasil ditambahkan !';
				$result['sts'] = '1';

			} 
			else {
				$result['msg'] = 'Data Hardware gagal ditambahkan !';
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
		$data['judul'] = 'Edit Data Hardware';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'hardware">Hardware</a></li><li class="active">Edit Data</li>';
		$data['view'] = 'master_data/hardware/edit';

		$data['detail'] = $this->m_global->get_data_all('hardware', null, [strEncrypt('hardwareID', TRUE) => $id]);
	

		$this->load->view('master_template', $data);


	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('ID', 'Hardware ID', 'trim|required');
		$this->form_validation->set_rules('tglmsk', 'Tanggal Masuk', 'trim|required');
		$this->form_validation->set_rules('aset', 'Aset', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('unitcode', 'Kode Unit', 'trim|required');
		$this->form_validation->set_rules('unitkerja', 'Unit Kerja', 'trim|required');
		$this->form_validation->set_rules('compname', 'Computer Name', 'trim|required');
		$this->form_validation->set_rules('model', 'Model', 'trim|required');
		$this->form_validation->set_rules('serialnumber', 'Serial Number', 'trim|required');
		$this->form_validation->set_rules('manufacturer', 'Manufacturer', 'trim|required');
		$this->form_validation->set_rules('product', 'Product', 'trim|required');
		$this->form_validation->set_rules('processors', 'Processors', 'trim|required');
		$this->form_validation->set_rules('macadd', 'Mac Address', 'trim|required');
		$this->form_validation->set_rules('macaddwifi', 'Mac Address Wifi', 'trim|required');
		$this->form_validation->set_rules('memorytype', 'Memory Type', 'trim|required');
		$this->form_validation->set_rules('memorysize', 'Memory Size', 'trim|required');
		$this->form_validation->set_rules('memorymax', 'Memory Max', 'trim|required|numeric');
		$this->form_validation->set_rules('memorydim1', 'Memory Dim 1', 'trim|required');
		$this->form_validation->set_rules('memorydim2', 'Memory Dim 2', 'trim|required');
		$this->form_validation->set_rules('memorydim3', 'Memory Dim 3', 'trim|required');
		$this->form_validation->set_rules('memorydim4', 'Memory Dim 4', 'trim|required');
		$this->form_validation->set_rules('winOSID', 'Windows OS ID', 'trim|required');
		$this->form_validation->set_rules('winOSver', 'Windows OS Version', 'trim|required');
		$this->form_validation->set_rules('winOSpk', 'Windows OS Product Key', 'trim|required');
		$this->form_validation->set_rules('winlabelID', 'Windows Label ID ', 'trim|required');
		$this->form_validation->set_rules('winlabelver', 'Windows Label Version', 'trim|required');
		$this->form_validation->set_rules('winlabelpk', 'WIndows Label Poduct Key', 'trim|required');
		if ($this->form_validation->run() == true){
			$data = array(
				'hardwareID' => $post['ID'],
				'tglmsk' => $post['tglmsk'],
				'aset' => $post['aset'],
				'status' => $post['status'],
				'username' => $post['username'],
				'unitcode' => $post['unitcode'],
				'unitkerja' => $post['unitkerja'],
				'compname' => $post['compname'],
				'model' => $post['model'],
				'serialnumber' => $post['serialnumber'],
				'manufacturer' => $post['manufacturer'],
				'product' => $post['product'],
				'processors' => $post['processors'],
				'macadd' => $post['macadd'],
				'macaddwifi' => $post['macaddwifi'],
				'memorytype' => $post['memorytype'],
				'memorysize' => $post['memorysize'],
				'memorymax' => $post['memorymax'],
				'memorydim1' => $post['memorydim1'],
				'memorydim2' => $post['memorydim2'],
				'memorydim3' => $post['memorydim3'],
				'memorydim4' => $post['memorydim4'],
				'winOSID' => $post['winOSID'],
				'winOSver' => $post['winOSver'],
				'winOSpk' => $post['winOSpk'],
				'winlabelID' => $post['winlabelID'],
				'winlabelver' => $post['winlabelver'],
				'winlabelpk' => $post['winlabelpk']
				);	
			$x = $this->m_global->get_data_all('hardware', null, ['hardwareID' => $data['hardwareID']]);
			if($x) {
				if(strEncrypt($x[0]->hardwareID) !== $id) {
					$result['msg'] = 'Kode Hardware sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('hardware', $data, [strEncrypt('hardwareID', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Data Hardware berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Data Hardware gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('hardware', $data, [strEncrypt('hardwareID', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Data Hardware berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Data Hardware gagal perbarui !';
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
		$data['title'] = 'Detail Hardware';
		$data['judul'] = 'Detail Data Hardware';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'hardware">Hardware</a></li><li class="active">Detail Data</li>';
		$data['view'] = 'master_data/hardware/detail';
		$data['detail'] = $this->m_global->get_data_all('hardware');
		
		$this->load->view('master_template', $data);

	}


	public function hapus(){
		$id = $this->input->post('id');
		$proses = $this->m_global->delete('hardware',['hardwareID'=>$id]);

		if($proses) {
			$result['msg'] = 'Data Hardware berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data Hardware gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}


}

/* End of file Hardware.php */
/* Location: ./application/controllers/Hardware.php */