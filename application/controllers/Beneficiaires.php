<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Beneficiaires extends CI_Controller
{
    public function index() {
        $this->load->view('liste_beneficiaires');
    }
    public function insert(){
        $data['nom_benef'] = $this->input->post('nom_benef');
        $this->load->model('BeneficiairesModel');
        $this->BeneficiairesModel->insert($data['nom_benef']);
        $this->load->view('liste_beneficiaires');
    }
}