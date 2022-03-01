<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EntreeModel extends CI_Model
{
    public function select($annee,$mois){
        $query =  $this->db->query("Select id_in_imprevu as id,date_in_imprevu as date, montant_in_imprevu as montant from entree_imprevu where extract(month from date_in_imprevu) = ".$mois." and  extract(YEAR from date_in_imprevu) = ".$annee."UNION 
                                    (select distinct on(id_utilisateur) id_utilisateur,date_salaire,montant_salaire from salaire where extract(year from date_salaire) <=".$annee." and extract(Month from date_salaire) <=".$mois." order by id_utilisateur,date_salaire desc)");
        return $query->result_array();

    }
}
?>