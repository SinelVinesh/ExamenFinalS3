<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Utilisateurs extends CI_Controller
{
    public function index() {
        $this->load->view('liste_utilisateurs');
    }
}