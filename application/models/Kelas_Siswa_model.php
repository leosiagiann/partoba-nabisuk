<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kelas_siswa_model extends CI_Model
{
    //load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll()
    {
        return $this->db->get('kelas_siswa');
    }

    public function get($id)
    {
        return $this->db->get_where('kelas_siswa', array('id' => $id));
    }

    public function tambah($data)
    {
        $this->db->insert('kelas_siswa', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('kelas_siswa', array('id' => $id));
    }

    public function hapusbyKelas($id)
    {
        $this->db->delete('kelas_siswa', array('id_kelas' => $id));
    }

    public function setFree($id, $action, $value)
    {
        $this->db->set($action, $value);
        $this->db->where('id', $id);
        $this->db->update('kelas_siswa');
    }

    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('kelas_siswa', $data);
    }
}