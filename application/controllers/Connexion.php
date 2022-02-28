<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Connexion extends CI_Controller {
    public function admin() {
        $this->load->view('admin_connexion');
    }
    public function connect_as_admin() {
        $admin['username'] = $this->input->post('username');
        $admin['password'] = $this->input->post('password');
    /// Validation de l'utilisateur
    }
}
