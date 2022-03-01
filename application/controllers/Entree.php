<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Entree extends CI_Controller
{

    public  function insert(){
        $this->load->model('EntreeModel');
        if($this->input->post('date_in_imprevu') !== null) {
            $data['date_in_imprevu'] = $this->input->post('date_in_imprevu') ;
            $data['montant_in_imprevu'] = $this->input->post('montant_in_imprevu') ;
            $this->EntreeModel->insert( $data['date_in_imprevu'],$data['montant_in_imprevu']);
        }
        $this->load->view('ajout_imprevu');
        }
    }
?>