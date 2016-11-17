<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Keaktifan extends CI_Controller {

	var $id_pengguna = null;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Keaktifan_model','Keaktifan');
		$this->load->model('Kegiatan_model','Kegiatan');
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

	function daftar() {

		$data=array(
			'id_pengguna'=>$this->id_pengguna
			);

		$data['daftar_keaktifan']=$this->Keaktifan->lihat($data);
		
		$this->load->view('templates/header');
		$this->load->view('peserta/keaktifan/daftar',$data);
		$this->load->view('templates/footer');
	}

	function tambah() {

		$data['alert']=null;

		if(isset($_POST['submit'])){

			$config = array(
				'upload_path'		=> './uploads/',
				'allowed_types'	=> 'gif|jpg|png',
				'max_size'			=> 100,
				'max_width'			=> 1024,
				'max_height'		=> 768,
				'file_name'			=> md5(date('dmY').'-'.htmlentities($_FILES['bukti']['name']))
				);

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('bukti'))
			{
				$data['alert'] = $this->upload->display_errors();
			}
			else
			{
				$upload_data=$this->upload->data();
				$kirim=array(
					'id_pengguna'=>$this->id_pengguna,
					'id_kegiatan'=>$this->input->post('kegiatan'),
					'deskripsi'=>$this->input->post('deskripsi'),
					'nama_file'=>$upload_data['file_name'],
					'status_keaktifan'=>'0',
					);
				$this->Keaktifan->tambah($kirim);	
				$data['alert']='Berhasil menambahkan data';
			}
		};
		
		$data['daftar_kegiatan']=$this->Kegiatan->lihat();

		$this->load->view('templates/header');
		$this->load->view('peserta/keaktifan/tambah',$data);
		$this->load->view('templates/footer');
	}

	function rincian($id) {

		$data['alert']=null;
		$data['alert_bukti']=null;

		if(isset($_POST['submit'])){
			$kirim=array(
				'id_kegiatan'=>$this->input->post('kegiatan'),
				'deskripsi'=>$this->input->post('deskripsi'),
				'status_keaktifan'=>'0'
				);
			$this->Keaktifan->ubah($id,$kirim);
			$data['alert']='Berhasil memperbarui data';
		}

		if(isset($_POST['submit_bukti'])){

			$config = array(
				'upload_path'		=> './uploads/',
				'allowed_types'	=> 'gif|jpg|png',
				'max_size'			=> 100,
				'max_width'			=> 1024,
				'max_height'		=> 768,
				'file_name'			=> md5(date('d-m-Y h:i:s').'-'.htmlentities($_FILES['bukti']['name']))
				);

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('bukti'))
			{
				$data['alert_bukti'] = $this->upload->display_errors();
			}
			else
			{
				$upload_data=$this->upload->data();
				$kirim=array(
					'nama_file'=>$upload_data['file_name'],
					'status_keaktifan'=>'0'
					);
				$this->Keaktifan->ubah($id,$kirim);
				$data['alert_bukti']='Berhasil memperbarui data';
			}
		};
		$kirim=array(
			'id_keaktifan'=>$id,
			'id_pengguna'=>$this->id_pengguna
			);

		$data['rincian_keaktifan']=$this->Keaktifan->lihat($kirim);
		$data['daftar_kegiatan']=$this->Kegiatan->lihat();

		$this->load->view('templates/header');
		$this->load->view('peserta/keaktifan/ubah',$data);
		$this->load->view('templates/footer');
	}

	function hapus($id) {
		$this->Keaktifan->hapus($id);

	}

}
