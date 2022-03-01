<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SalaireModel extends CI_Model
{
    public function insert($id_utilisateur,$montant_salaire){
        $query = $this->db->query("Insert into salaire(date_salaire, id_utilisateur, montant_salaire) values(now(),'".$id_utilisateur."',.$montant_salaire.)");
    }
}
?>