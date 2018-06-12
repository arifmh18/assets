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
		$data['judul'] = 'Dashboard';
		$data['breadcumb'] = '<li><i class="fa fa-dashboard"></i> Dashboard</li>';
		$data['view'] = 'dashboard';
		$data['manufacturer'] = count($this->m_global->get_data_all('manufacturer', null));
		$data['spesifikasi'] = count($this->m_global->get_data_all('spesifikasi', null));
		$data['lokasi'] = count($this->m_global->get_data_all('lokasi', null));

		$this->load->view('master_template', $data);
	
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */