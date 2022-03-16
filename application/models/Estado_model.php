<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Estado_model extends CI_Model
{
    private $table = "estado";
    private $id = "id";
    private $order = "ASC";

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $this->db->select(
            'estado.id,
            estado.nome,
            estado.sigla'
        );

        $this->db->from($this->table);
        return $this->db->get($this->table)->row();
    }

    public function get_by_id($id) 
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}