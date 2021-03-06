<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Model 
{
    public $tabel = 'dokumen';

    public function insert($data)
    {
        $this->db->insert($this->tabel, $data);
        return $this->db->insert_id();
    }

    public function delete($where)
    {
        return $this->db->delete($tabel, $where);
    }
    
    public function update($data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }

    public function get()
    {
        return $this->db->get($tabel);
    }


}


?>