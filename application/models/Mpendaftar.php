<?php 
class Mpendaftar extends CI_model
{
 
public function no_daftar()
{  
 return $this->db->query("SELECT max(id_pendaftaran)  as no_daftar from rn_daftar ");
}


}