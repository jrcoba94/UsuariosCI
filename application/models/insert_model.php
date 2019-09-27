<?php
class Insert_model extends CI_Model
{
    public function insert_usuario($data)
    {
        //students is table name here
    $this->load->database();
    $this->db->insert('users', $data);
    }
}
 
?>