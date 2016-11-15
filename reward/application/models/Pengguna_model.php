<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat($data=null){
    	$this->db->select('*');
    	$this->db->from('pengguna');
    	if($data!=null){
            $this->db->where($data);
        }
        return $this->db->get()->result();
    }

	public function tambah($data){
    	$this->db->insert('pengguna',$data);
        return $this->db->affected_rows();
    }

    public function ubah($id,$data){
    	$this->db->where('id_pengguna',$id);
    	$this->db->update('pengguna',$data);
        return $this->db->affected_rows();
    }

    public function hapus($id){
    	$this->db->where('id_pengguna',$id);
    	$this->db->delete('pengguna');
        return $this->db->affected_rows();
    }

}
