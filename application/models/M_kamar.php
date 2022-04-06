<?php
    class M_kamar extends CI_Model{
        function kamar(){ 
            return $this->db->get('tbl_kamar'); 
        }
        function edit($id){
            $this->db->where('id', $id);
            return $this->db->get('tbl_kamar');
        }
    }
?>