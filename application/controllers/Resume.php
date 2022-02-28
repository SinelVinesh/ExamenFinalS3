<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Resume extends CI_Controller
{
    public function index() {
        $this->load->view('tableau_mensuel');
    }

    public  function categorie($cat) {
        $data['categorie'] = $cat;
        $this->load->view('graphique_categorie',$data);
    }

    public  function beneficiaire($benef) {
        $data['beneficiaire'] = $benef;
        $this->load->view('tableau_beneficiaire',$data);
    }
}