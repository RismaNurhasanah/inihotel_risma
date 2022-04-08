<?php
    class M_kamar extends CI_Model{
        function kamar(){ 
            return $this->db->get('tbl_kamar'); 
        }
        function edit($id_kamar){
            $this->db->where('id_kamar', $id_kamar);
            return $this->db->get('tbl_kamar');
        }
    }
?>