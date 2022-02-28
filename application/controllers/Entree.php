<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Depense extends CI_Controller
{
    public function ajout() {
        $this->load->view('ajout_imprevu');
    }
}