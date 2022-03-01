<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Beneficiaires extends CI_Controller
{
    public function index() {
        $this->load->model('BeneficiairesModel');
        $data['beneficiaires'] = $this->BeneficiairesModel->getall();
        $this->load->view('liste_beneficiaires',$data);
    }
    public function insert(){
        $data['designation'] = $this->input->post('designation');
        $this->load->model('BeneficiairesModel');
        $this->BeneficiairesModel->insert($data['designation']);
        redirect(site_url('beneficiaires'),'refresh');
    }

    public function update() {
        $this->load->model('BeneficiairesModel');
        $beneficiaires = $this->BeneficiairesModel->getall();
        foreach ($beneficiaires as $beneficiaire) {
            $nom = $this->input->post($beneficiaire['id_benef']);
            $this->BeneficiairesModel->update($beneficiaire['id_benef'],$nom);
        }
        redirect(site_url('beneficiaires'),'refresh');
    }

}