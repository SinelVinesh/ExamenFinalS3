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
        $this->load->model('ConnexionModel');
        $valid_user = $this->ConnexionModel->connect_as_admin( $admin['username'] ,$admin['password'] );
        if($valid_user!=null) {
            $this->load->view('admin_index');
        }
    }

    public function user() {
        $this->load->view('user_connexion');
    }

    public function connect_as_simple_user() {
        $user['username'] = $this->input->post('username');
        $user['password'] = $this->input->post('password');
    /// Validation de l'utilisateur
        $valid_user = true;
        if($valid_user) {
            $this->load->view('user_index');
        }
    }
}
