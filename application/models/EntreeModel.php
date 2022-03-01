<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EntreeModel extends CI_Model
{
    public function select($annee,$mois){
        $query =  $this->db->query("Select * from entree_imprevu where extract(month from date_in_imprevu) = ".$mois." and  extract(YEAR from date_in_imprevu) = ".$annee."");
        return $query->result_array();
    }
}
?>