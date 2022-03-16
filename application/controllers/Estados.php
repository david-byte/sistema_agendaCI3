<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Estados extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("estado_model");
    }

    public function index()
    {
        $estados = $this->estado_model->get_all();

        $this->template->load("Template", "estados/list", [
            "title" => "Estados",
            "estado_data" => $estados,
            "start" => 0
        ]);
    }

    public function create()
    {

    }

    public function createAction()
    {

    }

    public function update($id)
    {

    }

    public function updateAction()
    {

    }

    public function delete($id)
    {

    }
}