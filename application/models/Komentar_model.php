<?php
defined('BASEPATH') or exit('No direct script access allowed');

class komentar_model extends CI_Model
{
    //load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll()
    {
        return $this->db->get('komentar');
    }

    public function get($id)
    {
        $siswa = $this->db->get_where('komentar', array('id' => $id))->row_array();
        return $siswa;
    }

    public function tambah($data)
    {
        $this->db->insert('komentar', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('komentar', array('id' => $id));
    }

    public function setFree($id, $action, $value)
    {
        $this->db->set($action, $value);
        $this->db->where('id', $id);
        $this->db->update('komentar');
    }

    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('komentar', $data);
    }
}