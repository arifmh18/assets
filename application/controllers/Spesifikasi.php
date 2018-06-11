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
		$data['spek'] = $this->m_global->get_data_all('spesifikasi');
		$this->load->view('master_template', $data);
	
	}

	public function hapus(){
		$id = $this->input->post('id');
		$proses = $this->m_global->delete('spesifikasi',['hardware_IDS'=>$id]);

		if($proses) {
			$result['msg'] = 'Data siswa berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data siswa gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}


}

/* End of file Spesifikasi.php */
/* Location: ./application/controllers/Spesifikasi.php */