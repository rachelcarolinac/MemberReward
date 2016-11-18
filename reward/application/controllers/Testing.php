<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
	}

	public function index()
	{
		$this->load->model('Pengguna_model');
		$kirim = array(
		'username' => "pengguna" , 
		'password' => "pengguna"
		// 'password' => md5($this->input->post('password'))
		);
		$test = $this->Pengguna_model->lihat($kirim);
		$expected_result = $this->hasil();

		$test_name = 'Test Metod Lihat Pada Model Pengguna ';

		$this->unit->run($test, $expected_result, $test_name);

		echo $this->unit->report();
	}

	

