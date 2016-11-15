<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Peserta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Peserta_model','Peserta');
		if(isset($this->session->userdata['data_pengguna'])){
			$this->id_pengguna = $this->session->userdata['data_pengguna']['id_pengguna'];
			$this->level_pengguna = $this->session->userdata['data_pengguna']['level_pengguna'];

			if($this->level_pengguna!=2){
				redirect(site_url('Login'));
			}
		}else{
			redirect(site_url('Login'));
		}
	}

	function index() {
		
		if(isset($_POST['submit'])){
			$data=array(
				''=>$this->input->post()
				);
			$this->Peserta->ubah($this->session->['data_login']['id_peserta'],$data);
		}

		$data=array(
			'id_peserta'=>$this->session->['data_login']['id_peserta']
			);
		$data['daftar_peserta']=$this->Peserta->lihat($data);
		var_dump($data['daftar_peserta']);
	}
}
