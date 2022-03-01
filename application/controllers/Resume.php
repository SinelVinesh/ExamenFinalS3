<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Resume extends CI_Controller
{
    public function index() {
        $this->load->view('index');
    }

    public  function categorie($cat=0) {
        $data['categorie'] = $cat;
        $this->load->view('graphique_categorie',$data);
    }

    public  function beneficiaire($benef=0) {
        $data['beneficiaire'] = $benef;
        $this->load->view('tableau_beneficiaire',$data);
    }
    public function filtered(){
        $this->load->model('DepensesModel');
        $this->load->model('EntreeModel');
        $data = array();
        if($this->input->post('month') !== null){
            $tmp['month'] = $this->input->post('month');
            $tmp['year'] = $this->input->post('year');
            $data['Depenses'] = $this->DepensesModel->select( $tmp['year'] ,$tmp['month']);
            $data['Entree'] = $this->EntreeModel->select( $tmp['year'] ,$tmp['month']);
        }
        $this->load->view('index',$data);
    }
}