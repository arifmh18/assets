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
		$data['hardware'] = count($this->m_global->get_data_all('hardware', null));
		$data['supplier'] = count($this->m_global->get_data_all('supplier', null));
		$data['unit'] = count($this->m_global->get_data_all('unit', null));
		$data['network'] = count($this->m_global->get_data_all('network', null));
		$data['listipadd'] = count($this->m_global->get_data_all('listipadd', null));
		$data['servicehardware'] = count($this->m_global->get_data_all('servicehardware', null));
		$data['windowsversion'] = count($this->m_global->get_data_all('windowsversion', null));

		$this->load->view('master_template', $data);
	
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */