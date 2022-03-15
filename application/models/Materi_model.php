<?php
defined('BASEPATH') or exit('No direct script access allowed');

class materi_model extends CI_Model
{
    //load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll()
    {
        return $this->db->get('materi');
    }

    public function get($id)
    {
        $materi = $this->db->get_where('materi', array('id' => $id))->row_array();
        return $materi;
    }

    public function tambah($data)
    {
        $this->db->insert('materi', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('materi', array('id' => $id));
    }

    public function hapusByKelas($id)
    {
        $this->db->delete('materi', array('id_kelas' => $id));
    }

    public function setFree($id, $action, $value)
    {
        $this->db->set($action, $value);
        $this->db->where('id', $id);
        $this->db->update('materi');
    }

    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('materi', $data);
    }
}