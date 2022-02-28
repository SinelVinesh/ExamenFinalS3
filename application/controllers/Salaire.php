<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Salaire extends CI_Controller
{
    public function index() {
        $this->load->view('liste_salaries');
    }

    public function modif_salaire() {
        $this->load->view('modif_salaire');
    }
}