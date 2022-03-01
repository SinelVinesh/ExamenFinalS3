<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DepensesModel extends CI_Model
{
    public function select($annee,$mois){
      $query =  $this->db->query("Select depenses.id_depenses,depenses.date_depenses,depenses.id_categorie,depenses.montant_depenses,budget.montant_budget,depenses.id_benef,((100*depenses.montant_depenses)/budget.montant_budget) as pourcentage from depenses join budget on depenses.id_categorie = budget.id_categorie where (extract(month from depenses.date_depenses) = ".$mois." and  extract(YEAR from depenses.date_depenses) = ".$annee.") and (extract(month from budget.date_budget) = ".$mois."  and  extract(YEAR from budget.date_budget) = ".$annee.")");
      return $query->result_array();
    }

    public function filter_depense_beneficiaire($annee,$mois,$benef) {
        $query =  $this->db->query("Select id_depenses,date_depenses,id_categorie,montant_depenses from depenses where (extract(month from date_depenses) = ".$mois." and  extract(YEAR from date_depenses) = ".$annee." and id_benef LIKE '".$benef."')");
        return $query->result_array();
    }


}
?>