<?php
    class M_transaksi extends CI_Model{
        function transaksi(){ 
            return $this->db->get('tbl_transaksi'); 
        }
        function edit($id){
            $this->db->where('id', $id);
            return $this->db->get('tbl_transaksi');
        }
    }
?>