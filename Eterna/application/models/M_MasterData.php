<?php

class M_MasterData extends CI_Model{

////////////////////////////////////////////////CEK LOGIN////////////////////////////////
// Cek Login
    function cek_login($table,$data){      
        $query = $this->db->get_where($table,$data);

        if ($query->num_rows() == 1) {
            return $query->row();
        }else{
            return false;
        }
    }
////////////////////////////////////////////////GET////////////////////////////////

////////////////////////////////////////////////INPUT////////////////////////////////
    // INPUT DATA LOG
    function input_log($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // INPUT DATA WEREHOUSE
    function input_wh($table, $data)
    {
        $this->db->insert($table,$data);
    }

    function input_profile($table, $data)
    {
        $this->db->insert($table,$data);
    }

    function input_rumahsakit($table, $data)
    {
        $this->db->insert($table,$data);
    }
////////////////////////////////////////////////UPDATE////////////////////////////////
    function update_profile($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    function update_rumahsakit($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }
////////////////////////////////////////////////DELETE////////////////////////////////

}

