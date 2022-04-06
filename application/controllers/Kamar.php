<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {
	public function index(){
   
		$this->load->model('M_kamar'); 
		$k['kamar'] = $this->M_kamar->kamar()->result();
  
		$this->load->view('ph_admin/navigasi_admin');
		$this->load->view('ph_admin/topbar');
		$this->load->view('kamar/kamar', $k);
		$this->load->view('ph_admin/header');
		$this->load->view('ph_admin/js');
		$this->load->view('ph_admin/footer');
		
	}
	function tambah(){
            
		$this->load->view('ph_admin/navigasi_admin');
		$this->load->view('ph_admin/topbar');
		$this->load->view('kamar/tambah');
		$this->load->view('ph_admin/header');
		$this->load->view('ph_admin/js');
		$this->load->view('ph_admin/footer');
	}
	function proses_tambah(){
	  $add =
	  [
		  'no_kamar'      =>  $this->input->post('no_kamar'),
		  'id_jenis'     	=>  $this->input->post('id_jenis'),
		  'ket_kamar'   	=>  $this->input->post('ket_kamar'),

	  ];
	  $this->db->insert('tbl_kamar',$add);
	  redirect('kamar');

	}function edit($id_kamar){
		$this->load->model('M_kamar');
        $k['kamar'] = $this->M_kamar->edit($id_kamar)->row_array();

	   	$this->load->view('ph_admin/navigasi_admin');
		$this->load->view('ph_admin/topbar');
		$this->load->view('kamar/edit', $k);
		$this->load->view('ph_admin/header');
		$this->load->view('ph_admin/js');
		$this->load->view('ph_admin/footer');
		
    }function proses_edit(){
        $id = $this->input->post('id');
        $no_kamar = $this->input->post('no_kamar');
		$id_jenis = $this->input->post('id_jenis');
        $ket_kamar = $this->input->post('ket_kamar');

            $data =array(
                'no_kamar' => $no_kamar,
                'ket_kamar' => $ket_kamar,
				'id_jenis' => $id_jenis
            );

            $where =array(
                'id' => $id
            );

            $this->db->where($where);
            $this->db->update('tbl_kamar', $data);

            redirect(base_url("/kamar"));
    }public function hapus($id){
		$id = $id;
		$this->db->delete('tbl_kamar', ['id' => $id]);
		redirect('/kamar');
	}
}
