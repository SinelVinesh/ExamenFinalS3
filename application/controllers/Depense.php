<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Depense extends CI_Controller
{
    public  function ajout(){
        $this->load->model('DepensesModel');
        $data = array();

        $data['list'] = $this->DepensesModel->getList();
        $this->load->view('ajout_depense',$data);
    }
    public function insert()
    {

        $this->load->model('DepensesModel');
        if ($this->input->post('id_categorie') !== null) {

            $data['date_depenses'] = $this->input->post('date_depenses');
            $data['id_benef'] = $this->input->post('id_benef');
            $data['motant_depenses'] = $this->input->post('montant_depenses');
            $data['id_categorie'] = $this->input->post('id_categorie');
            $total =array();
            $total =  $this->DepensesModel->getBudget($data['id_categorie'] );
            if($total['montant_budget'] > $data['motant_depenses'] ){
            $this->DepensesModel->insert( $data['date_depenses'],$data['id_benef'],$data['motant_depenses'],$data['id_categorie']);
            }else{
                $data['error'] = "Depenses impossible";
            }
        }

        $this->load->view('ajout_depense',$data);
    }
    public function chartData(){
        $this->load->model(DepensesModel);
        $data = array();
        $data['chartData1'] = $this->DepensesModel->chartData();
        $this->load->view('graphique_categorie.php',$data);
    }

}
?>