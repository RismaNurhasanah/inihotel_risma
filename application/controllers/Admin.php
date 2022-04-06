<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index(){
		
		$this->load->view('ph_admin/navigasi_admin');
		$this->load->view('ph_admin/topbar');
		$this->load->view('admin/index');
		$this->load->view('ph_admin/header');
		$this->load->view('ph_admin/js');
		$this->load->view('ph_admin/footer');

		/*$this->load->view('partial_home/footer');
		$this->load->view('partial_home/modals');
		$this->load->view('partial_home/js');*/
	}
}
