<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Pengguna_model','pengguna');

		if(isset($this->session->userdata['data_pengguna'])){
			$this->id_pengguna = $this->session->userdata['data_pengguna']['id_pengguna'];
			$this->level_pengguna = $this->session->userdata['data_pengguna']['level_pengguna'];

			if($this->level_pengguna==1){
				redirect('Admin/Dashboard');
			}else{
				redirect('Peserta/Dashboard');
			}
		}
	}

	public function index()
	{
		$data['alert']=null;
		if(isset($_POST['submit'])){
			$kirim = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				// 'password' => md5($this->input->post('password'))
				);
			
			$hasil = $this->pengguna->lihat($kirim);

			if($hasil)
			{
				$data_pengguna = array(
					'id_pengguna' => $hasil[0]->id_pengguna,
					'nama_pengguna' => $hasil[0]->nama_pengguna, 
					'level_pengguna' => $hasil[0]->level_pengguna 
					);
				$this->session->set_userdata('data_pengguna',$data_pengguna);

				if($hasil[0]->level_pengguna == 1)
				{
					redirect('Admin/Dashboard');
				}
				elseif($hasil[0]->level_pengguna == 2)
				{
					redirect('Peserta/Dashboard');
				}
			}else{
				$data['alert']="username dan/atau Password yang anda masukkan salah";
			}
		}
		$this->load->view('umum/login',$data);
	}
}
