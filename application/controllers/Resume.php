<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Resume extends CI_Controller
{
    public function index() {
        $tmp['month'] = date('m');
        $tmp['year'] = date('Y');
        $data = $this->getDepensesEntrees($tmp);
        $this->load->view('index',$data);
    }

    public  function categorie($cat=0) {
        $data['categorie'] = $cat;
        $this->load->view('graphique_categorie',$data);
    }

    public  function beneficiaire() {
        $this->load->model('BeneficiairesModel');
        $data['beneficiaires'] = $this->BeneficiairesModel->getall();

        if(($benef = $this->input->post('beneficiaire')) != null) {
            $year = $this->input->post('year');
            $month = $this->input->post('month');
            $this->load->model('DepensesModel');
            $data['depenses'] = $this->DepensesModel->filter_depense_beneficiaire($year,$month,$benef);
        }

        $this->load->view('tableau_beneficiaire',$data);
    }
    public function filtered(){
        $this->load->model('DepensesModel');
        $this->load->model('EntreeModel');
        $data = array();
        if($this->input->post('month') !== null){
            $tmp['month'] = $this->input->post('month');
            $tmp['year'] = $this->input->post('year');
            $data = $this->getDepensesEntrees($tmp);
        }
        $this->load->view('index',$data);
    }

    private function getDepensesEntrees(array $tmp)
    {
        $this->load->model('DepensesModel');
        $this->load->model('EntreeModel');
        $data['depenses'] = $this->DepensesModel->select($tmp['year'], $tmp['month']);
        $data['entrees'] = $this->EntreeModel->select($tmp['year'], $tmp['month']);
        $data['periode']['year'] = $tmp['year'];
        $data['periode']['month'] = $tmp['month'];
        return $data;
    }
}