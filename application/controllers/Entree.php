<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Entree extends CI_Controller
{

    public  function insert(){
        $this->load->model('EntreeModel');

            $data['date_in_imprevu'] = $this->input->post('date') ;
            $data['montant_in_imprevu'] = $this->input->post('montant') ;
            $this->EntreeModel->insert( $data['date_in_imprevu'],$data['montant_in_imprevu']);

        $this->load->view('index');
        }
        public function select(){
            $this->load->model('EntreeModel');
            $data = array();
            $data['list'] =  $this->EntreeModel->getList();
            $this->load->view('ajout_imprevu',$data);
        }
    }
?>