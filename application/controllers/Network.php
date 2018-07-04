<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Network extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->SecurityModel->auth();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Network | IT Assets';
		$data['judul'] = 'Network';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li class="active">Network</li>';
		$data['view'] = 'master_data/network/index';
		$data['network'] = $this->m_global->get_data_all('network');
		$this->load->view('master_template', $data);
	
	}


	public function add()
	{
		$data['title'] = 'Tambah Data';
		$data['judul'] = 'Tambah Data Network';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard active"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'network">Network</a></li><li class="active">Tambah data</li>';
		$data['view'] = 'master_data/network/add';

		$this->load->view('master_template', $data);
		
	}

	public function act_add()
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'ID Network', 'trim|required');
		$this->form_validation->set_rules('nama', 'Server Area', 'trim|required');
		$this->form_validation->set_rules('no_switch', 'No Switch', 'trim|required');
		$this->form_validation->set_rules('no_socket', 'No Socket', 'trim|required');
		$this->form_validation->set_rules('no_kabel', 'No Kabel', 'trim|required');

		if ($this->form_validation->run() == true){
			$data = array(
				'idnetwork' => $post['kode'],
				'server_area' => $post['nama'],
				'no_switch' => $post['no_switch'],
				'no_socket' => $post['no_socket'],
				'no_kabel' => $post['no_kabel']
				);
			$proses = $this->m_global->insert('network', $data);
			if($proses) {
				$result['msg'] = 'Data Network berhasil ditambahkan !';
				$result['sts'] = '1';
			} 
			else {
				$result['msg'] = 'Data Network gagal ditambahkan !';
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
		$data['judul'] = 'Edit Data Network';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'network">Network</a></li><li class="active">Edit Data</li>';
		$data['view'] = 'master_data/network/edit';

		$data['detail'] = $this->m_global->get_data_all('network', null, [strEncrypt('idnetwork', TRUE) => $id]);

		$this->load->view('master_template', $data);


	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();

		// $this->form_validation->set_rules('induk', 'No induk', 'trim|required|numeric|min_length[18]|max_length[18]');
		$this->form_validation->set_rules('kode', 'ID Network', 'trim|required');
		$this->form_validation->set_rules('nama', 'Server Area', 'trim|required');
		$this->form_validation->set_rules('no_switch', 'No Switch', 'trim|required');
		$this->form_validation->set_rules('no_socket', 'No Socket', 'trim|required');
		$this->form_validation->set_rules('no_kabel', 'No Kabel', 'trim|required');

		if ($this->form_validation->run() == true){
			$data = array(
				'idnetwork' => $post['kode'],
				'server_area' => $post['nama'],
				'no_switch' => $post['no_switch'],
				'no_socket' => $post['no_socket'],
				'no_kabel' => $post['no_kabel']
					);				
			
			$x = $this->m_global->get_data_all('network', null, ['idnetwork' => $data['idnetwork']]);
			if($x) {
				if(strEncrypt($x[0]->idnetwork) !== $id) {
					$result['msg'] = 'Kode Network sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('network', $data, [strEncrypt('idnetwork', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Data Network berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Data Network gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('network', $data, [strEncrypt('idnetwork', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Data Network berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Data Network gagal perbarui !';
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
		$proses = $this->m_global->delete('network',['idnetwork'=>$id]);

		if($proses) {
			$result['msg'] = 'Data Network berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data Network gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}

}

/* End of file Network.php */
/* Location: ./application/controllers/Network.php */