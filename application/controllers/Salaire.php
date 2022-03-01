<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Salaire extends CI_Controller
{
    public function index() {
        $this->load->view('gestion_salaire');
    }

    public function modif_salaire() {
        $data['date_salaire'] = $this->input->post('date_salaire');
        $data['montant'] = $this->input->post('montant');
        $this->load->model('SalaireModel');
        $this->load->view('modif_salaire');
    }
}