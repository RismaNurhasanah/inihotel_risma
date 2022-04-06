<?php
   class konsumen extends CI_Controller{
    function index(){
          
      $this->load->model('M_konsumen'); 
      $k['konsumen'] = $this->M_konsumen->konsumen()->result();

      $this->load->view('ph_admin/navigasi_admin');
      $this->load->view('ph_admin/topbar');
      $this->load->view('konsumen/konsumen', $k);
      $this->load->view('ph_admin/header');
      $this->load->view('ph_admin/js');
      $this->load->view('ph_admin/footer');
    }
    function tambah(){
            
      $this->load->view('ph_admin/navigasi_admin');
      $this->load->view('ph_admin/topbar');
      $this->load->view('konsumen/tambah');
      $this->load->view('ph_admin/header');
      $this->load->view('ph_admin/js');
      $this->load->view('ph_admin/footer');

    }function proses_tambah(){
      $add =
      [
          'email'           =>  $this->input->post('email'),
          'nama_depan'      =>  $this->input->post('nama_depan'),
          'nama_belakang'   =>  $this->input->post('nama_belakang'),
          'alamat'          =>  $this->input->post('alamat'),
          'kota'            =>  $this->input->post('kota'),
          'provinsi'        =>  $this->input->post('provinsi'),
          'negara'          =>  $this->input->post('negara'),
          'no_identitas'    =>  $this->input->post('no_identitas'),
          'no_telp'         =>  $this->input->post('no_telp'),
  
      ];
      $this->db->insert('tbl_konsumen',$add);
      redirect('konsumen');

    }function edit($id_konsumen){
      $this->load->model('M_konsumen');
      $k['konsumen'] = $this->M_konsumen->edit($id_konsumen)->row_array();


      $this->load->view('ph_admin/navigasi_admin');
      $this->load->view('ph_admin/topbar');
      $this->load->view('konsumen/edit', $k);
      $this->load->view('ph_admin/header');
      $this->load->view('ph_admin/js');
      $this->load->view('ph_admin/footer');
    }
    function proses_edit(){
        $email          = $this->input->post('email');
        $nama_depan     = $this->input->post('nama_depan');
        $nama_belakang  = $this->input->post('nama_belakang');
        $alamat         = $this->input->post('alamat');
        $kota           = $this->input->post('kota');
        $provinsi       = $this->input->post('provinsi');
        $negara         = $this->input->post('negara');
        $no_identitas   = $this->input->post('no_identitas');
        $no_telp        = $this->input->post('no_telp');
  
        $data =array(
          'nama_depan'    => $nama_depan,
          'nama_belakang' => $nama_belakang,
          'alamat'        => $alamat,
          'kota'          => $kota,
          'provinsi'      => $provinsi,
          'negara'        => $negara,
          'no_identitas'  => $no_identitas,
          'no_telp'       => $no_telp,
      );
  
      $where =array(
          'email' => $email
      );
  
      $this->db->where($where);
      $this->db->update('tbl_konsumen', $data);
  
      redirect(base_url("konsumen"));
    }
      public function hapus($id_konsumen){
        $id_konsumen = $id_konsumen;
        $this->db->delete('tbl_konsumen', ['id_konsumen' => $id_konsumen]);
        redirect('konsumen');
      }
    
    
   }
?>