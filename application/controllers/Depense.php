<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Depense extends CI_Controller
{
    public function insert()
    {
        $this->load->model('DepensesModel');
        if ($this->input->post('id_categorie') !== null) {
            $data['date_depenses'] = $this->input->post('date_depenses');
            $data['id_benef'] = $this->input->post('id_benef');
            $data['motant_depenses'] = $this->input->post('motant_depenses');
            $data['id_categorie'] = $this->input->post('id_categorie');

            $this->DepensesModel->insert( $data['date_depenses'],$data['id_benef'],$data['motant_depenses'],$data['id_categorie']);
        }

        $this->load->view('ajout_depense');
    }
    public function chartData(){
        $this->load->model(DepensesModel);
        $data = array();
        $data['chartData1'] = $this->DepensesModel->chartData();
        $this->load->view('graphique_categorie.php',$data);
    }

}
?>