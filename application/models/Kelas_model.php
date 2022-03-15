<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kelas_model extends CI_Model
{
    //load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll()
    {
        return $this->db->get('kelas');
    }

    public function get($nip)
    {
        $kelas = $this->db->get_where('kelas', array('nip' => $nip))->row_array();
        return $kelas;
    }

    public function getID($id)
    {
        $kelas = $this->db->get_where('kelas', array('id' => $id))->row_array();
        return $kelas;
    }

    public function tambah($data)
    {
        $this->db->insert('kelas', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('kelas', array('id' => $id));
    }

    public function hapusByNip($nip)
    {
        $this->db->delete('kelas', array('nip' => $nip));
    }

    public function setFree($id, $action, $value)
    {
        $this->db->set($action, $value);
        $this->db->where('id', $id);
        $this->db->update('kelas');
    }

    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('kelas', $data);
    }
}