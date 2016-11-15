<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Pengguna_model','pengguna');
	}

	public function index()
	{
		
		// $data_pengguna = array(
		// 	'id_pengguna' => $hasil[0]->id_pengguna,
		// 	'nama_pengguna' => $hasil[0]->nama_pengguna, 
		// 	'level_pengguna' => $hasil[0]->level_pengguna 
		// 	);
		// $this->session->unset_userdata('data_pengguna',$data_pengguna);
		$this->session->unset_userdata('data_pengguna');

		redirect(site_url('Login'));
	}
}
