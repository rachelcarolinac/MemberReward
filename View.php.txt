<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_MemberReward extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}

	public function index(){
		echo "Member Reward  | masukan file | kpplD.com";
	}

	public function Selamat Datang(){
		$this->load->view('MemberReward');
	}

} 