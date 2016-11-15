<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

	var $id_pengguna = null;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Keaktifan_model','Keaktifan');
		if(isset($this->session->userdata['data_pengguna'])){
			$this->id_pengguna = $this->session->userdata['data_pengguna']['id_pengguna'];
			$this->level_pengguna = $this->session->userdata['data_pengguna']['level_pengguna'];

			if($this->level_pengguna!=1){
				redirect(site_url('Login'));
			}
		}else{
			redirect(site_url('Login'));
		}
	}

	function index() {
		$data=array(
			'status_keaktifan!='=>'1'
			);

		$data['daftar_keaktifan']=$this->Keaktifan->lihat($data);

		$this->load->view('templates/header');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('templates/footer');
	}

}
