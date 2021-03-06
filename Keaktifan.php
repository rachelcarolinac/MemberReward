<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Keaktifan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Keaktifan_model','Keaktifan');
		$this->load->model('Kegiatan_model','Kegiatan');
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

	function daftar() {

		$data['daftar_keaktifan']=$this->Keaktifan->lihat();
		
		$this->load->view('templates/header');
		$this->load->view('admin/keaktifan/daftar',$data);
		$this->load->view('templates/footer');
	}

	function rincian($id) {

		$data['alert']=null;

		if(isset($_POST['setuju'])){
			$kirim=array(
				'status_keaktifan'=>'1'
				);
			$this->Keaktifan->ubah($id,$kirim);
			$data['alert']='Berhasil memperbarui data';
		}

		if(isset($_POST['tolak'])){
			$kirim=array(
				'status_keaktifan'=>'2'
				);
			$this->Keaktifan->ubah($id,$kirim);
			$data['alert']='Berhasil memperbarui data';
		}

		$kirim=array(
			'id_keaktifan'=>$id,
			);

		$data['rincian_keaktifan']=$this->Keaktifan->lihat($kirim);
		$data['daftar_kegiatan']=$this->Kegiatan->lihat();

		$this->load->view('templates/header');
		$this->load->view('admin/keaktifan/ubah',$data);
		$this->load->view('templates/footer');
	}
}
