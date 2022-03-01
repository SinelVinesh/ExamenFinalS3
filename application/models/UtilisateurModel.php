<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UtilisateurModel extends CI_Model
{
    public function insert($nom,$login,$password){
        $this->db->query("Insert into utilisateur(nom_utilisateur, login_utilisateur, password_utilisateur) values('".$nom."','".$login."','".$password."')");
    }
    public function delete($id_utilisateur){
        $this->db->query("Delete from utilisateur where id_utilisateur = '".$id_utilisateur."'");
    }
    public  function update($id_utilisateur,$nom_colonne,$nouvelle_valeur){
        $this->db->query("update utilisateur set '".$nom_colonne."' = '".$nouvelle_valeur."' where id_utilisateur = '".$id_utilisateur."'");
    }
    public function select(){
       $query = $this->db->query("SELECT nom_utilisateur,login_utilisateur,password_utilisateur from utilisateur");
        return $query->result_array();
    }
    public function connect_as_admin($login, $mdp)
    {

        $query = $this->db->query("select * from utilisateur where login_utilisateur = '" . $login . "' and password_utilisateur = '" . $mdp . "' and admin = true");
        return $query->row_array();
    }

    public function connect_as_simple_user($login, $mdp)
    {
        $query = $this->db->query("select * from utilisateur where login_utilisateur = '" . $login . "' and password_utilisateur = '" . $mdp . "'");
        return $query->row_array();
    }
}
?>