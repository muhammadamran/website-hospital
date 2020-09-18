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

    // INPUT DATA PROFILE
    function input_profile($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // INPUT DATA CONTENT RUMAH SAKIT
    function input_rumahsakit($table, $data)
    {
        $this->db->insert($table,$data);
    }

///////////////////TAMPILAN PELAYANAN////////////////////////////

    // INPUT DATA PELAYANAN MEDIS-HD
    function input_hd($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // INPUT DATA PELAYANAN MEDIS-IGD
    function input_igd($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // INPUT DATA PELAYANAN MEDIS-RAWAT JALAN
    function input_rj($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // INPUT DATA PELAYANAN MEDIS-RAWAT INAP
    function input_ri($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // INPUT DATA PELAYANAN MEDIS-CAPD
    function input_capd($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // INPUT DATA PELAYANAN MEDIS-BEDAH
    function input_bedah($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // INPUT DATA PELAYANAN MEDIS-MCU
    function input_mcu($table, $data)
    {
        $this->db->insert($table,$data);
    }

///////////////////ALUR PELAYANAN////////////////////////////

    // INPUT DATA PELAYANAN MEDIS-HD
    function input_alurhd($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // INPUT DATA PELAYANAN MEDIS-IGD
    function input_alurigd($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // INPUT DATA PELAYANAN MEDIS-RAWAT JALAN
    function input_alurrj($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // INPUT DATA PELAYANAN MEDIS-RAWAT INAP
    function input_alurri($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // INPUT DATA PELAYANAN MEDIS-CAPD
    function input_alurcapd($table, $data)
    {
        $this->db->insert($table,$data);
    }

///////////////////ADMINISTRASI////////////////////////////
    // INPUT DATA PELAYANAN MEDIS-RAWAT INAP
    function input_admrj($table, $data)
    {
        $this->db->insert($table,$data);
    }

    function input_admri($table, $data)
    {
        $this->db->insert($table,$data);
    }
///////////////////TATA TERTIB RAWAT INAP////////////////////////////
    // INPUT DATA PELAYANAN MEDIS-RAWAT INAP
    function input_tt_ri($table, $data)
    {
        $this->db->insert($table,$data);
    }
///////////////////HAK DAN KEWAJIBAN PASIEN RAWAT INAP////////////////////////////
    // INPUT DATA PELAYANAN MEDIS-RAWAT INAP
    function input_hkp_ri($table, $data)
    {
        $this->db->insert($table,$data);
    }
///////////////////////PENUNJANG MEDIS///////////////////////////////
    function input_farmasi($table, $data)
    {
        $this->db->insert($table,$data);
    }

    function input_lab($table, $data)
    {
        $this->db->insert($table,$data);
    }

    function input_radiologi($table, $data)
    {
        $this->db->insert($table,$data);
    }
////////////////////////////////////////////////UPDATE////////////////////////////////
    // UPDATE SLIDE
    function update_slide($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE REKAN
    function update_rekan($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE PROFILE RUMAH SAKIT
    function update_profile($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE RUMAH SAKIT
    function update_rumahsakit($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE KONTAK
    function update_kontak($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE PELAYANAN MEDIS-HD
    function update_hd($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE PELAYANAN MEDIS-IGD
    function update_igd($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE PELAYANAN MEDIS-RAWAT JALAN
    function update_rj($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE PELAYANAN MEDIS-RAWAT INAP
    function update_ri($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE PELAYANAN MEDIS-CAPD
    function update_capd($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE PELAYANAN MEDIS-BEDAH
    function update_bedah($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE PELAYANAN MEDIS-MCU
    function update_mcu($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }
////////////////////ALUR////////////////////
    // UPDATE PELAYANAN MEDIS-HD
    function update_alurhd($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE PELAYANAN MEDIS-IGD
    function update_alurigd($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE PELAYANAN MEDIS-RAWAT JALAN
    function update_alurrj($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE PELAYANAN MEDIS-RAWAT INAP
    function update_alurri($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    // UPDATE PELAYANAN MEDIS-CAPD
    function update_alurcapd($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

///////////////////ADMINISTRASI////////////////////////////
   function update_admrj($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    function update_admri($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }
////////////////////TATA TERTIB////////////////////
    // UPDATE PELAYANAN MEDIS-RAWAT INAP
    function update_tt_ri($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }
////////////////////HAK DAN KEWAJIBAN////////////////////
    // UPDATE PELAYANAN MEDIS-RAWAT INAP
    function update_hkp_ri($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }
//////////////////PENUNJANG MEDIS////////////
    function update_farmasi($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    function update_lab($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }

    function update_radiologi($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table,$data); 
    }
////////////////////////////////////////////////DELETE////////////////////////////////

}

