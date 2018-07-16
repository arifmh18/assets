<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListIPAddress extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->SecurityModel->auth();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'List IP Address | IT Assets';
		$data['judul'] = 'List IP Address';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li class="active">ListIPAddress</li>';
		$data['view'] = 'master_data/listipaddress/index';
		$data['listipaddress'] = $this->m_global->get_data_all('listipaddress');
		$data['hardware'] = $this->m_global->get_data_all('hardware');
		$data['network'] = $this->m_global->get_data_all('network');
		$this->load->view('master_template', $data);
	
	}


	public function add()
	{
		$data['title'] = 'Tambah Data';
		$data['judul'] = 'Tambah Data List IP Address';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard active"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'listipaddress">ListIPAddress</a></li><li class="active">Tambah data</li>';
		$data['view'] = 'master_data/listipaddress/add';
		$data['hardware'] = $this->m_global->get_data_all('hardware');
		$data['network'] = $this->m_global->get_data_all('network');
		$this->load->view('master_template', $data);
		
	}

	public function hardware()
	{
		$this->load->model('m_autocomplete');
		if (isset($_GET['term'])) {
            $result = $this->m_autocomplete->get_data('hardware', $_GET['term'], 'hardwareID');
            								
            if (count($result) > 0) {
				foreach ($result as $row)
				$arr_result[] = array(
					'hardwareID' => $row->hardwareID,
					'compname' => $row->compname,
					'macadd' => $row->macadd,
					'macaddwifi' => $row->macaddwifi,
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
		$this->form_validation->set_rules('kode', 'IP Address', 'trim|required');
		$this->form_validation->set_rules('hardwareID', 'Hardware ID');
		$this->form_validation->set_rules('devicename', 'Device Name');
		$this->form_validation->set_rules('macadd', 'Mac Address');
		$this->form_validation->set_rules('macaddwifi', 'Mac Address Wifi');
		$this->form_validation->set_rules('unitcode', 'Unit Code');
		$this->form_validation->set_rules('unitkerja', 'Unit Kerja');
		$this->form_validation->set_rules('lokasi', 'Lokasi');
		$this->form_validation->set_rules('server_area', 'Server Area');

		if ($this->form_validation->run() == true){
			$data = array(
				'IPadd' => $post['kode'],
				'hardwareID' => $post['hardwareID'],
				'devicename' => $post['devicename'],
				'macadd' => $post['macadd'],
				'macaddwifi' => $post['macaddwifi'],
				'unitcode' => $post['unitcode'],
				'unitkerja' => $post['unitkerja'],
				'lokasi' => $post['lokasi'],
				'server_area' => $post['server_area']
				);
			$proses = $this->m_global->insert('listipaddress', $data);
			if($proses) {
				$result['msg'] = 'Data List IP Address berhasil ditambahkan !';
				$result['sts'] = '1';
			} 
			else {
				$result['msg'] = 'Data List IP Address gagal ditambahkan !';
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
		$data['judul'] = 'Edit Data List IP Address';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'listipaddress">ListIPAddress</a></li><li class="active">Edit Data</li>';
		$data['view'] = 'master_data/listipaddress/edit';
		$data['hardware'] = $this->m_global->get_data_all('hardware');
		$data['network'] = $this->m_global->get_data_all('network');
		$data['detail'] = $this->m_global->get_data_all('listipaddress', null, [strEncrypt('IPadd', TRUE) => $id]);

		$this->load->view('master_template', $data);


	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'IP Address', 'trim|required');
		$this->form_validation->set_rules('hardwareID', 'Hardware ID');
		$this->form_validation->set_rules('devicename', 'Device Name');
		$this->form_validation->set_rules('macadd', 'Mac Address');
		$this->form_validation->set_rules('macaddwifi', 'Mac Address Wifi');
		$this->form_validation->set_rules('unitcode', 'Unit Code');
		$this->form_validation->set_rules('unitkerja', 'Unit Kerja');
		$this->form_validation->set_rules('lokasi', 'Lokasi');
		$this->form_validation->set_rules('server_area', 'Server Area');

		if ($this->form_validation->run() == true){
			$data = array(
				'IPadd' => $post['kode'],
				'hardwareID' => $post['hardwareID'],
				'devicename' => $post['devicename'],
				'macadd' => $post['macadd'],
				'macaddwifi' => $post['macaddwifi'],
				'unitcode' => $post['unitcode'],
				'unitkerja' => $post['unitkerja'],
				'lokasi' => $post['lokasi'],
				'server_area' => $post['server_area']
				);				
			
			$x = $this->m_global->get_data_all('listipaddress', null, ['IPadd' => $data['IPadd']]);
			if($x) {
				if(strEncrypt($x[0]->IPadd) !== $id) {
					$result['msg'] = 'IP Address sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('listipaddress', $data, [strEncrypt('IPadd', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Data List IP Address berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Data List IP Address gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('listipaddress', $data, [strEncrypt('IPadd', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Data List IP Address berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Data List IP Address gagal perbarui !';
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
		$proses = $this->m_global->delete('listipaddress',['IPadd'=>$id]);

		if($proses) {
			$result['msg'] = 'Data List IP Address berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data List IP Address gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}

}

/* End of file ListIPAddress.php */
/* Location: ./application/controllers/ListIPAddress.php */