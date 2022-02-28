<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categorie extends CI_Controller
{
    public function insertion() {
        $this->load->view('categorie_insertion.php');
    }
}