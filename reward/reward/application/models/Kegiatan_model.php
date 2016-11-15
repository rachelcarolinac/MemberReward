<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat($data=null){
    	$this->db->select('*');
    	$this->db->from('kegiatan');
    	if($data!=null){
            $this->db->where($data);
        }
        return $this->db->get()->result();
    }

	public function tambah($data){
    	$this->db->insert('kegiatan',$data);
        return $this->db->affected_rows();
    }

    public function ubah($id,$data){
    	$this->db->where('id_kegiatan',$id);
    	$this->db->update('kegiatan',$data);
        return $this->db->affected_rows();
    }

    public function hapus($id){
    	$this->db->where('id_kegiatan',$id);
    	$this->db->delete('kegiatan');
        return $this->db->affected_rows();
    }

}
