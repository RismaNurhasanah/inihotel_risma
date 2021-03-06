<?php
   class user extends CI_Controller{
    function index(){

        $user = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $user])->row_array();
       
		$this->load->view('ph_admin/navigasi_admin');
		$this->load->view('ph_admin/topbar');
		$this->load->view('content_admin/user', $data);
        $this->load->view('ph_admin/header');
        $this->load->view('ph_admin/js');
        $this->load->view('ph_admin/footer');
    }
    function update_profile(){
        $user = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $user])->row_array();
        
		$this->load->view('ph_admin/navigasi_admin');
		$this->load->view('ph_admin/topbar');
		$this->load->view('content_admin/update_profile_admin', $data);
        $this->load->view('ph_admin/header');
        $this->load->view('ph_admin/js');
        $this->load->view('ph_admin/footer');
    }
    function proses_update_profile(){
        $email = $this->input->post('email');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $no_hp = $this->input->post('no_hp');

            $data =array(
                'nama_lengkap' => $nama_lengkap,
                'no_hp' => $no_hp
            );

            $where =array(
                'email' => $email
            );

            $this->db->where($where);
            $this->db->update('tbl_user', $data);

            redirect(base_url("index.php/user"));
    }
    function ganti_password(){
        $user = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $user])->row_array();
        
		$this->load->view('ph_admin/navigasi_admin');
		$this->load->view('ph_admin/topbar');
		$this->load->view('content_admin/ganti_password_admin', $data);
        $this->load->view('ph_admin/header');
        $this->load->view('ph_admin/js');
        $this->load->view('ph_admin/footer');
    }
    function proses_ganti_password(){
        $email = $this->input->post('email'); 
        $password1 = $this->input->post('password1'); 
        $password2 = $this->input->post('password2'); 
        
        if ($password1  == $password2) {
        $password1      = MD5($password1);
        $data           = array(
        'password' => $password1
        );
        $where = array(
        'email' => $email
        );
        
        $this->db->where($where);
        $this->db->update('tbl_user', $data);
        redirect(base_url("index.php/user"));
        
        }else{
        echo "Password tidak sama";
        redirect(base_url("index.php/user/ganti_password"));
        }
        }
   }
?>