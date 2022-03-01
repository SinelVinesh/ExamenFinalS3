<?php

class BudgetModel extends CI_Model
{
    public function getLatest($id_categorie) {
        $query = $this->db->query("select montant_budget from budget where id_categorie = '".$id_categorie."' order by date_budget limit 1")
    }
}