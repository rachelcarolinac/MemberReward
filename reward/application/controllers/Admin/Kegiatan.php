<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kegiatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kegiatan_model','Kegiatan');
	}

	function daftar() {
		$data['daftar_kegiatan']=$this->Kegiatan->lihat();
	}

	function rincian($id) {
		if(isset($_POST['submit'])){
			$data=array(
				''=>$this->input->post()
				);
			$this->Kegiatan->ubah($id,$data);
		};
		$data=array(
			'id_kegiatan'=>$id
			);

		$data['rincian_kegiatan']=$this->Kegiatan->lihat($data);
	}

	function tambah() {
		if(isset($_POST['submit'])){
			$data=array(
				''=>$this->input->post()
				);
			$this->Kegiatan->tambah($data);
		};
	}

	function hapus($id) {
		$this->Kegiatan->hapus($id);
	}

}
