<?php
    class M_konsumen extends CI_Model{
        function konsumen(){ 
            return $this->db->get('tbl_konsumen'); 
        }
        function edit($id_konsumen){
            $this->db->where('id_konsumen', $id_konsumen);
            return $this->db->get('tbl_konsumen');
        }
    }
?>