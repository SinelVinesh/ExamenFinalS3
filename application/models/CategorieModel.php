<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CategorieModel extends CI_Model
{
    public function insert($type_categorie,$Budget){
        $tmp = array();
        $this->db->query("Insert into categorie(type_categorie) values('".$type_categorie."')");
        $query = $this->db->query("select id_categorie from categorie order by id_categorie desc limit  1");
        $tmp = $query->row_array();
        $this->db->query("Insert into budget(date_budget, montant_budget, id_categorie) values(now(),$Budget,'".$tmp['id_categorie']."')");
    }
}
?>