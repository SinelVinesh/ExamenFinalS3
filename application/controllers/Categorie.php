<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categorie extends CI_Controller
{
    public function insertion() {
        $this->load->model('CategorieModel');
        $this->load->model('BudgetModel');
        $datas['categories'] = $this->CategorieModel->getall();
        foreach ($datas['categories'] as $category) {
            $category['budget'] = $this->BudgetModel->getLatest(category['id_category']);
        }
        $this->load->view('categorie_insertion.php',$datas);
    }

    public function insert(){
        $data['categorie_name'] = $this->input->post('categorie_name');
        $data['budget'] = $this->input->post('budget_mensuel');
        $this->load->Model('CategorieModel');
        $this->CategorieModel->insert($data['categorie_name'],$data['Budget']);
        $this->load->view('index.php');
    }
    public function getById(){
        $this->load->model(CategorieModel);
        $data = array();
        if($this->input->post('id_categorie') !== null) {
            $tmp['id_categorie'] = $this->input->post('id_categorie');
            $data['ById'] = $this->CategorieModel->getById($tmp['id_categorie'] );
        }
        }
        public function chartData(){
            $this->load->model(CategorieModel);
            $data = array();
            $data['chartData'] = $this->CategorieModel->chartData();
            $this->load->view('graphique_categorie.php',$data);
        }
    }
?>