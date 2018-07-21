<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends AR_Controller {

public function __construct()
{
	parent::__construct();
	$this->SecurityModel->auth();
	//Do your magic here
}
	public function index()
	{
		
	}

	public function edit($id)
	{
		$data = $this->notif_aktif('user', 'guru', 'siswa', 'industri');
		$data['title'] = 'Edit Profil | SI Prakerin';
		$data['judul'] = 'Edit Profil';
		$data['breadcumb'] = '<li><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li class="active">Edit Profil</li>';
		$data['view'] = 'profile/edit';

		$data['jurusan'] = $this->m_global->get_data_all('jurusan');
		$data['profile'] = $this->m_global->get_data_all('user',null, [strEncrypt('id', true)=> $id]);

		$this->load->view('master_template', $data);
		
	}

	public function act_edit($id)
	{
		$result = [];
		$post = $this->input->post();
		$password = $post['password'];

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		if (!empty($password) || !empty($post['repass'])) {
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('repass', 'Ulangi Password', 'trim|required|matches[password]');			
		}

		$tgl = tgl_indo(date('Y-m-d'));
		$hari = nama_hari(date('Y-m-d'));

		if ($this->form_validation->run() == true){
			if ($password == '') {
				$data = array(
					'username' => $post['username']
					);
			}
			else{
				$data = array(
					'username' => $post['username'],
					'password' => md5($post['password'])
					);				
			}
			$x = $this->m_global->get_data_all('user', null, [strEncrypt('id', TRUE)=>$id]);
			if($x) {
				if(strEncrypt($x[0]->id) !== $id) {
					$result['msg'] = 'Data tidak berhasil diperbarui !';
					$result['sts'] = '0';
				}
				else{
					$proses = $this->m_global->update('user', $data, [strEncrypt('id', TRUE) => $id]);
					if($proses) {
						$result['msg'] = 'Profil berhasil perbarui !';
						$result['sts'] = '1';
					} 
					else {
						$result['msg'] = 'Profil gagal perbarui !';
						$result['sts'] = '0';
					}
				}
			}
			else{
				$proses = $this->m_global->update('user', $data, [strEncrypt('id', TRUE) => $id]);
				if($proses) {
					$result['msg'] = 'Profil berhasil perbarui !';
					$result['sts'] = '1';
				} 
				else {
					$result['msg'] = 'Profil gagal perbarui !';
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

	public function ubah_avatar($id){
        $this->load->library('upload');
        $nmfile = "avatar_".time();
        $config['upload_path'] = './assets/img/avatar/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size'] = '2048';
        $config['max_width']  = '1024';
        $config['max_height']  = '1024';
        $config['file_name'] = $nmfile;
     
        $this->upload->initialize($config);
        
        if($_FILES['avatar']['name'])
        {
            if ($this->upload->do_upload('avatar'))
            {
                $ava = $this->upload->data();
                $data = array(
                  'avatar' =>$ava['file_name']
                );

				$proses = $this->m_global->update('user', $data, [strEncrypt('id', TRUE) => $id]);
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success fade in\" id=\"alert\">Avatar berhasil diperbarui !! silahkan logout untuk melihat hasil</div></div>");
                redirect('profile/edit/'.$id);
            }else{
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Avatar gagal diperbarui !!</div></div>");
                redirect('profile/edit/'.$id);
            }
        }

        else{
                redirect('profile/edit/'.$id);
        }

	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */