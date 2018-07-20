<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->SecurityModel->auth();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Dashboard | IT Assets';
		$data['breadcumb'] = '';
		$data['judul']= '';
		$data['view'] = 'dashboard';
		$data['hardwareAset'] = count($this->m_global->get_data_all('hardware', [['supplier', 'hardware.aset = supplier.idsupplier']], ['supplier.status'=>'Aset']));
		$data['hardwareSewa'] = count($this->m_global->get_data_all('hardware', [['supplier', 'hardware.aset = supplier.idsupplier']], ['supplier.status'=>'Sewa']));
		$data['hardwarePC'] = count($this->m_global->get_data_all('hardware', null, ['model'=>'PC Dekstop']));
		$data['hardwareNote'] = count($this->m_global->get_data_all('hardware', null, ['model'=>'Notebook']));
		$data['servicehardware'] = count($this->m_global->get_data_all('servicehardware', null, ['status'=>'Service']));
		$this->load->view('master_template', $data);
	
	}

	public function detail($keterangan){
		$data['title'] = 'Dashboard | IT Assets';
		$data['breadcumb'] = '';
		$data['judul']= '';
		$data['view'] = 'dashboard_detail';
		$data['supplier'] = $this->m_global->get_data_all('supplier');
		if ($keterangan == 'aset') {
			$data['hardware'] = $this->m_global->get_data_all('hardware', [['supplier', 'hardware.aset = supplier.idsupplier']], ['supplier.status'=>'Aset']);
		}
		elseif ($keterangan == 'sewa') {
			$data['hardware'] = $this->m_global->get_data_all('hardware', [['supplier', 'hardware.aset = supplier.idsupplier']], ['supplier.status'=>'Sewa']);
			
		}
		elseif ($keterangan == 'pc') {
			$data['hardware'] = $this->m_global->get_data_all('hardware', null, ['model'=>'PC Dekstop']);
			
		}
		elseif ($keterangan == 'notebook') {
			$data['hardware'] = $this->m_global->get_data_all('hardware', null, ['model'=>'Notebook']);
			
		}
		// $data['servicehardware'] = $this->m_global->get_data_all('servicehardware', null, ['status'=>'Service']);
		$this->load->view('master_template', $data);

	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */