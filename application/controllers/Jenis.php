<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenis extends CI_Controller {
	public function index(){
   
		$this->load->model('M_jenis'); 
		$j['jenis'] = $this->M_jenis->jenis()->result();
  
		$this->load->view('ph_admin/navigasi_admin');
		$this->load->view('ph_admin/topbar');
		$this->load->view('jenis/jenis', $j);
		$this->load->view('ph_admin/header');
		$this->load->view('ph_admin/js');
		$this->load->view('ph_admin/footer');
		
	}
	function tambah(){
            
		$this->load->view('ph_admin/navigasi_admin');
		$this->load->view('ph_admin/topbar');
		$this->load->view('jenis/tambah');
		$this->load->view('ph_admin/header');
		$this->load->view('ph_admin/js');
		$this->load->view('ph_admin/footer');
	}
	function proses_tambah(){
	  $add =
	  [
		  'nama_jenis'      =>  $this->input->post('nama_jenis'),
		  'keterangan'     	=>  $this->input->post('keterangan'),
		  'harga'   		=>  $this->input->post('harga'),
		  'foto'   			=>  $this->input->post('foto'),

	  ];
	  $this->db->insert('tbl_jenis_kamar',$add);
	  redirect('jenis');

	}function edit($id){
		$this->load->model('M_jenis');
        $j['jenis'] = $this->M_jenis->edit($id)->row_array();

	   	$this->load->view('ph_admin/navigasi_admin');
		$this->load->view('ph_admin/topbar');
		$this->load->view('jenis/edit', $j);
		$this->load->view('ph_admin/header');
		$this->load->view('ph_admin/js');
		$this->load->view('ph_admin/footer');
		
    }function proses_edit(){
        $id_jenis 	= $this->input->post('id_jenis');
        $nama_jenis = $this->input->post('nama_jenis');
		$keterangan = $this->input->post('keterangan');
        $harga 		= $this->input->post('harga');
        $foto	 	= $this->input->post('foto');

            $data =array(
                'nama_jenis' => $nama_jenis,
				'keterangan' => $keterangan,
                'harga' => $harga,
				'foto' => $foto
            );

            $where =array(
                'id_jenis' => $id_jenis
            );

            $this->db->where($where);
            $this->db->update('tbl_jenis_kamar', $data);

            redirect(base_url("/jenis"));
    }public function hapus($id_jenis){
		$id_jenis = $id_jenis;
		$this->db->delete('tbl_jenis_kamar', ['id_jenis' => $id_jenis]);
		redirect('/jenis');
	}
}
