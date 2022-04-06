<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_kamar extends CI_Controller {
	public function index(){
		
		$this->load->view('partial_home/header');
		$this->load->view('partial_home/navigasi');
		$this->load->view('content/pesan_kamar');
		$this->load->view('partial_home/footer');
		$this->load->view('partial_home/modals');
		$this->load->view('partial_home/js');
	}
}
