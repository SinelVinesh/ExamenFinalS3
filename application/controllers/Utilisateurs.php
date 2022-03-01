<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Utilisateurs extends CI_Controller
{
    public function index() {
        $this->load->view('liste_utilisateurs');
    }
    public function insert(){
        $data['nom'] = $this->input->post('nom');
        $data['login'] = $this->input->post('login');
        $data['password'] = $this->input->post('password');
        $this->load->model('UtilisateurModel');
        $this->Utilisateur->insert($data['nom'],$data['login'],$data['password']);
        $this->load->view('liste_utilisateurs');
    }
 public function select(){
        $this->load->model('UtilisateurModel');
        $data = array();
        $data['utilisateur'] = $this->UtilisateurModel->select();
        $this->load->view('liste_utilisateurs',$data);

 }
}