<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing_kegiatan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('Kegiatan_model','Kegiatan');

    }

    public function index()
    {
        $this->load->model('Kegiatan');
        $kirim=array(
            'id_kegiatan'=> '3',
            );

        $test = $this->Kegiatan->lihat($kirim);
        
        $expected_result = $this->hasil();

        $test_name = 'Test Method lihat Pada Model Kegiatan';

        $this->unit->run($test, $expected_result, $test_name);

        echo $this->unit->report();
    }

    function hasil()
    {
        $obj = new stdClass;
        $obj->id_kegiatan = "3";
        $obj->nama_kegiatan = "Seminar Internasional";
        $obj->poin_kegiatan ="1000";
        $array[0] = $obj;
        return $array;
    }
}