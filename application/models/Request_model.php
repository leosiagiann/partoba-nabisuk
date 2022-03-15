<?php
defined('BASEPATH') or exit('No direct script access allowed');

class request_model extends CI_Model
{
    //load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll()
    {
        return $this->db->get('request');
    }

    public function get($id)
    {
        $request = $this->db->get_where('request', array('id' => $id))->row_array();
        return $request;
    }

    public function tambah($data)
    {
        $this->db->insert('request', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('request', array('id' => $id));
    }

    public function setFree($id, $action, $value)
    {
        $this->db->set($action, $value);
        $this->db->where('id', $id);
        $this->db->update('request');
    }

    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('request', $data);
    }
}