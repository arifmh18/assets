<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->SecurityModel->auth();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Sewa | IT Assets';
		$data['judul'] = 'Sewa';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li class="active">Sewa</li>';
		$data['view'] = 'master_data/sewa/index';
		$data['sewa'] = $this->m_global->get_data_all('sewa');
		$data['supplier'] = $this->m_global->get_data_all('supplier');
		$this->load->view('master_template', $data);
	
	}

public function add()
	{
		$data['title'] = 'Tambah Data';
		$data['judul'] = 'Tambah Data Sewa';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard active"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'sewa">Sewa</a></li><li class="active">Tambah data</li>';
		$data['view'] = 'master_data/sewa/add';
		$data['model'] = $this->m_global->get_data_all('model');
		$data['supplier'] = $this->m_global->get_data_all('supplier');
		$this->load->view('master_template', $data);
		
	}

	public function act_add()
	{
		$result = [];
		$post = $this->input->post();

		$this->form_validation->set_rules('kode_barang', 'Kode Barang', 'trim|required');
		$this->form_validation->set_rules('model_barang', 'Model Barang', 'trim|required');
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required');
		$this->form_validation->set_rules('tgl_mulai_sewa', 'Tanggal Mulai Sewa', 'required');
		$this->form_validation->set_rules('tgl_akhir_sewa', 'Tanggal Akhir Sewa', 'required');
		$this->form_validation->set_rules('no_po', 'No PO', 'trim|required');
		$this->form_validation->set_rules('supplier', 'Supplier', 'trim|required');

		if ($this->form_validation->run() == true && $post['tgl_mulai_sewa'] <= $post['tgl_akhir_sewa']){
			$data = array(
				'kode_barang' => $post['kode_barang'],
				'model_barang' => $post['model_barang'],
				'nama_barang' => $post['nama_barang'],
				'tgl_mulai_sewa' => date($post['tgl_mulai_sewa']),
				'tgl_akhir_sewa' => date($post['tgl_akhir_sewa']),
				'no_po' => $post['no_po'],
				'supplier' => $post['supplier']
				);
			$proses = $this->m_global->insert('sewa', $data);
			if($proses) {
				$result['msg'] = 'Data Sewa berhasil ditambahkan !';
				$result['sts'] = '1';
			} 
			else {
				$result['msg'] = 'Data Sewa gagal ditambahkan !';
				$result['sts'] = '0';
			}
		}
		elseif ($this->form_validation->run() == true && $post['tgl_mulai_sewa'] >= $post['tgl_akhir_sewa']) {
				$result['msg'] = 'Tanggal Akhir Sewa tidak boleh sebelum Tanggal Mulai Sewa !';
				$result['sts'] = '0';			
		}
		else {
			$result['msg'] = validation_errors();
			$result['sts'] = '0';
		}
		
		echo json_encode($result);


	}

	public function edit($id){
		$data['title'] = 'Edit Data ';
		$data['judul'] = 'Edit Data Sewa';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'sewa">Sewa</a></li><li class="active">Edit Data</li>';
		$data['view'] = 'master_data/sewa/edit';

		$data['detail'] = $this->m_global->get_data_all('sewa', null, [strEncrypt('kode_barang', TRUE) => $id]);
		$data['supplier'] = $this->m_global->get_data_all('supplier');

		$this->load->view('master_template', $data);


	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();

		$this->form_validation->set_rules('kode_barang', 'Kode Barang', 'trim|required');
		$this->form_validation->set_rules('model_barang', 'Model Barang', 'trim|required');
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required');
		$this->form_validation->set_rules('tgl_mulai_sewa', 'Tanggal Mulai Sewa', 'trim|required');
		$this->form_validation->set_rules('tgl_akhir_sewa', 'Tanggal Akhir Sewa', 'trim|required');
		$this->form_validation->set_rules('no_po', 'No PO', 'trim|required');
		$this->form_validation->set_rules('supplier', 'Supplier', 'trim|required');
		if ($this->form_validation->run() == true && $post['tgl_mulai_sewa'] <= $post['tgl_akhir_sewa']){
			$data = array(
				'kode_barang' => $post['kode_barang'],
				'model_barang' => $post['model_barang'],
				'nama_barang' => $post['nama_barang'],
				'tgl_mulai_sewa' => $post['tgl_mulai_sewa'],
				'tgl_akhir_sewa' => $post['tgl_akhir_sewa'],
				'no_po' => $post['no_po'],
				'supplier' => $post['supplier']
				);	
			
			$x = $this->m_global->get_data_all('Sewa', null, ['kode_barang' => $data['kode_barang']]);
			if($x) {
				if(strEncrypt($x[0]->kode_barang) !== $id) {
					$result['msg'] = 'Kode Sewa sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('sewa', $data, [strEncrypt('kode_barang', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Data Sewa berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Data Sewa gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('sewa', $data, [strEncrypt('kode_barang', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Data Sewa berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Data Sewa gagal perbarui !';
					$result['sts'] = '0';
				}
			}
		}
		elseif ($this->form_validation->run() == true && $post['tgl_mulai_sewa'] >= $post['tgl_akhir_sewa']) {
			$result['msg'] = 'Tanggal Akhir Sewa tidak boleh sebelum Tanggal Mulai Sewa !';
			$result['sts'] = '0';			
		}

		else {
			$result['msg'] = validation_errors();
			$result['sts'] = '0';
		}
		
		echo json_encode($result);


	}

//	public function detail($id){
//		$data['title'] = 'Detail Sewa';
//		$data['judul'] = 'Detail Data Sewa';
//		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li><i class="fa fa-files-o"></i> Master Data</li><li><a href="'.base_url().'Sewa">Sewa</a></li><li class="active">Detail Data</li>';
//		$data['view'] = 'master_data/Sewa/detail';

//		$data['detail'] = $this->m_global->get_data_all('Sewa', [['supplier','Sewa.supplier = kode_supplier']], [strEncrypt('kode_barang', TRUE) => $id]);
//		$this->load->view('master_template', $data);

//	}


	public function hapus(){
		$id = $this->input->post('id');
		$proses = $this->m_global->delete('sewa',['kode_barang'=>$id]);

		if($proses) {
			$result['msg'] = 'Data Sewa berhasil dihapus !';
			$result['sts'] = '1';
		} 
		else {
			$result['msg'] = 'Data Sewa gagal dihapus !';
			$result['sts'] = '0';
		}

		echo json_encode($result);
	}

}

/* End of file Sewa.php */
/* Location: ./application/controllers/Sewa.php */