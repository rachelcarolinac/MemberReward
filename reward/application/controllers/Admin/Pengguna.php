<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengguna_model','Pengguna');
	}

	function daftar() {
		$data['daftar_pengguna']=$this->Pengguna->lihat();
	}

	function rincian($id) {
		
		if(isset($_POST['submit'])){
			$data=array(
				''=>$this->input->post()
				);
			$this->Pengguna->ubah($id,$data);
		};
		
		$data=array(
			'id_pengguna'=>$id
			);

		$data['rincian_pengguna']=$this->Pengguna->lihat($data);
	}

	function tambah() {
		if(isset($_POST['submit'])){
			$data=array(
				''=>$this->input->post()
				);
			$this->Pengguna->tambah($data);
		};
	}

	function hapus($id) {
		$this->Pengguna->hapus($id);
	}

}
