<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	public function index(){

        $this->load->model('M_transaksi'); 
		$t['transaksi'] = $this->M_transaksi->transaksi()->result();
		
		$this->load->view('ph_admin/navigasi_admin');
		$this->load->view('ph_admin/topbar');
		$this->load->view('transaksi/transaksi', $t);
		$this->load->view('ph_admin/header');
		$this->load->view('ph_admin/js');
		$this->load->view('ph_admin/footer');

	}function tambah(){
            
		$this->load->view('ph_admin/navigasi_admin');
		$this->load->view('ph_admin/topbar');
		$this->load->view('transaksi/tambah');
		$this->load->view('ph_admin/header');
		$this->load->view('ph_admin/js');
		$this->load->view('ph_admin/footer');
	}function proses_tambah(){
	  $add =
	  [
		  'id_user'     =>  $this->input->post('id_user'),
		  'konsumen'    =>  $this->input->post('konsumen'),
		  'tgl'   		=>  $this->input->post('tgl'),
		  'id_jenis'   	=>  $this->input->post('id_jenis'),
		  'durasi'   	=>  $this->input->post('durasi'),

	  ];
	  $this->db->insert('tbl_transaksi',$add);
	  redirect('transaksi');

	}function edit($id){
		$this->load->model('M_transaksi');
        $j['transaksi'] = $this->M_transaksi->edit($id)->row_array();

	   	$this->load->view('ph_admin/navigasi_admin');
		$this->load->view('ph_admin/topbar');
		$this->load->view('transaksi/edit', $j);
		$this->load->view('ph_admin/header');
		$this->load->view('ph_admin/js');
		$this->load->view('ph_admin/footer');
		
    }function proses_edit(){
        $id 		= $this->input->post('id');
        $id_user 	= $this->input->post('id_user');
		$konsumen 	= $this->input->post('konsumen');
        $tgl 		= $this->input->post('tgl');
        $id_jenis 	= $this->input->post('id_jenis');
		$durasi 	= $this->input->post('durasi');

            $data =array(
                'id_user' 	=> $id_user,
				'konsumen' 	=> $konsumen,
                'tgl' 		=> $tgl,
				'id_jenis' 	=> $id_jenis,
				'durasi' 	=> $durasi
            );

            $where =array(
                'id' => $id
            );

            $this->db->where($where);
            $this->db->update('tbl_transaksi', $data);

            redirect(base_url("/transaksi"));
    }public function hapus($id){
		$id = $id;
		$this->db->delete('tbl_transaksi', ['id' => $id]);
		redirect('/transaksi');
	}
}
