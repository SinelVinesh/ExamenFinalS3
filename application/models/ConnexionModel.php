<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ConnexionModel extends CI_Model
{

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