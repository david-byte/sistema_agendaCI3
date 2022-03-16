<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sala extends CI_Controller
{

    public function index()
    {
        echo "aqui";
    }

    public function create()
    {
        $this->load->helper('form');

        $this->template->load("Template", "sala/form", [
            'title' => "Cadastro da Sala",
            'button' => "Create",
            'action' => site_url("sala/createAction"),

            'nome' => set_value("nome"),
            'fk_cidade' => set_value("fk_cidade")
        ]);
    }
}
