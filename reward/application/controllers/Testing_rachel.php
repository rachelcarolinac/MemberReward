<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing_rachel extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('Keaktifan_model','Keaktifan');

    }

    public function index()
    {
        $this->load->model('Keaktifan');
        $kirim=array(
            'id_keaktifan'=> '2',
            );

        $test = $this->Keaktifan->lihat($kirim);
        
        $expected_result = $this->hasil();

        $test_name = 'Test Metod Lihat Pada Model Keaktifan';

        $this->unit->run($test, $expected_result, $test_name);

        echo $this->unit->report();
    }

    function hasil()
    {
        $obj = new stdClass;
        $obj->id_keaktifan = "2";
        $obj->id_pengguna = "2";
        $obj->id_kegiatan ="1";
        $obj->deskripsi = "asd";
        $obj->nama_file ="cfd9454ec126dbf3b8c150cb620d4b99.jpg";
        $obj->status_keaktifan ="1";
        $obj->nama_kegiatan ="Test";
        $obj->poin_kegiatan ="1000";
        $array[0] = $obj;
        return $array;
    }
}