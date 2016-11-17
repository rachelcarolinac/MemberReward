<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keaktifan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat($data=null){
		$this->db->select('*');
		$this->db->from('keaktifan');
		$this->db->join('kegiatan','ON kegiatan.id_kegiatan=keaktifan.id_kegiatan');
		if($data!=null){
			$this->db->where($data);
		}
		return $this->db->get()->result();
	}

	public function tambah($data){
		$this->db->insert('keaktifan',$data);
		return $this->db->affected_rows();
	}
	public function ubah($id,$data){
		$this->db->where('id_keaktifan',$id);
		$this->db->update('keaktifan',$data);
		return $this->db->affected_rows();
	}

	public function hapus($id){
		$this->db->where('id_keaktifan',$id);
		$this->db->delete('keaktifan');
		return $this->db->affected_rows();

	}

}
