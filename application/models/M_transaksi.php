<?php
    class M_transaksi extends CI_Model{
        function transaksi(){ 
            return $this->db->get('tbl_transaksi'); 
        }
        function edit($id_transaksi){
            $this->db->where('id_transaksi', $id_transaksi);
            return $this->db->get('tbl_transaksi');
        }
    }
?>