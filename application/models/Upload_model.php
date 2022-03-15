<?php
defined('BASEPATH') or exit('No direct script access allowed');

class upload_model extends CI_Model
{
    //load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll()
    {
        return $this->db->get('upload');
    }

    public function get($id)
    {
        $upload = $this->db->get_where('upload', array('id' => $id))->row_array();
        return $upload;
    }

    public function tambah($data)
    {
        $this->db->insert('upload', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('upload', array('id' => $id));
    }

    public function hapusByMateri($id)
    {
        $this->db->delete('upload', array('id_materi' => $id));
    }

    public function setFree($id, $action, $value)
    {
        $this->db->set($action, $value);
        $this->db->where('id', $id);
        $this->db->update('upload');
    }

    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('upload', $data);
    }
}