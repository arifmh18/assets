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
		$data['hardwareservice'] = count($this->m_global->get_data_all('servicehardware', null, ['status'=>'Service']));
		$data['hardwarePCAset'] = count($this->m_global->get_data_all('hardware', [['supplier', 'hardware.aset = supplier.idsupplier']], ['model'=>'PC Dekstop', 'supplier.status'=>'Aset']));
		$data['hardwarePCSewa'] = count($this->m_global->get_data_all('hardware', [['supplier', 'hardware.aset = supplier.idsupplier']], ['model'=>'PC Dekstop', 'supplier.status'=>'Sewa']));
		$data['hardwareNoteAset'] = count($this->m_global->get_data_all('hardware', [['supplier', 'hardware.aset = supplier.idsupplier']], ['model'=>'Notebook', 'supplier.status'=>'Aset']));
		$data['hardwareNoteSewa'] = count($this->m_global->get_data_all('hardware', [['supplier', 'hardware.aset = supplier.idsupplier']], ['model'=>'Notebook', 'supplier.status'=>'Sewa']));
		$data['hardwareStatUsed'] = count($this->m_global->get_data_all('hardware', null, ['status'=>'Used']));
		$data['hardwareStatAfval'] = count($this->m_global->get_data_all('hardware', null, ['status'=>'Afval']));
		$data['ipkosong'] = count($this->m_global->get_data_all('listipaddress', null, ['hardwareID'=>'']));
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

		elseif ($keterangan == 'pcaset') {
			$data['hardware'] = $this->m_global->get_data_all('hardware', [['supplier', 'hardware.aset = supplier.idsupplier']], ['model'=>'PC Dekstop', 'supplier.status'=>'Aset']);
		}

		elseif ($keterangan == 'pcsewa') {
			$data['hardware'] = $this->m_global->get_data_all('hardware', [['supplier', 'hardware.aset = supplier.idsupplier']], ['model'=>'PC Dekstop', 'supplier.status'=>'Sewa']);
		}


		elseif ($keterangan == 'noteaset') {
			$data['hardware'] = $this->m_global->get_data_all('hardware', [['supplier', 'hardware.aset = supplier.idsupplier']], ['model'=>'Notebook', 'supplier.status'=>'Aset']);
		}


		elseif ($keterangan == 'notesewa') {
			$data['hardware'] = $this->m_global->get_data_all('hardware', [['supplier', 'hardware.aset = supplier.idsupplier']], ['model'=>'Notebook', 'supplier.status'=>'Sewa']);
		}

		elseif ($keterangan == 'statused') {
			$data['hardware'] = $this->m_global->get_data_all('hardware', null, ['status'=>'Used']);
		}

		elseif ($keterangan == 'statafval') {
			$data['hardware'] = $this->m_global->get_data_all('hardware', null, ['status'=>'Afval']);
		}

		// $data['servicehardware'] = $this->m_global->get_data_all('servicehardware', null, ['status'=>'Service']);
		$this->load->view('master_template', $data);

	}


	public function detail1($keterangan){
		$data['title'] = 'Dashboard | IT Assets';
		$data['breadcumb'] = '';
		$data['judul']= '';
		$data['view'] = 'dashboard_detail1';
		
		if ($keterangan == 'service') {
			$data['servicehardware'] = $this->m_global->get_data_all('servicehardware', null, ['status'=>'Service']);
		}
		// $data['servicehardware'] = $this->m_global->get_data_all('servicehardware', null, ['status'=>'Service']);
		$this->load->view('master_template', $data);

	}

	public function detail2($keterangan){
		$data['title'] = 'Dashboard | IT Assets';
		$data['breadcumb'] = '';
		$data['judul']= '';
		$data['view'] = 'dashboard_detail2';
		
		if ($keterangan == 'ipnotused') {
			$data['listipaddress'] = $this->m_global->get_data_all('listipaddress', null, ['hardwareID'=>'']);
		}
		// $data['servicehardware'] = $this->m_global->get_data_all('servicehardware', null, ['status'=>'Service']);
		$this->load->view('master_template', $data);

	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */