<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BeneficiairesModel extends CI_Model
{
    public function insert($nom_benef){
        $this->db->query("insert into benef(nom_benef) values('".$nom_benef."') ");
    }
    public function delete($id_benef){
        $this->db->query("delete from benef where id_benef ='".$id_benef."'");
    }
}
?>