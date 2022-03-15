<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswa_model extends CI_Model
{
    //load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll()
    {
        return $this->db->get('siswa');
    }

    public function get($email)
    {
        $siswa = $this->db->get_where('siswa', array('email' => $email))->row_array();
        return $siswa;
    }

    public function getID($id)
    {
        $siswa = $this->db->get_where('siswa', array('id' => $id))->row_array();
        return $siswa;
    }


    public function tambah($data)
    {
        $this->db->insert('siswa', $data);
    }

    public function hapus($email)
    {
        $this->db->delete('siswa', array('email' => $email));
    }

    public function setFree($email, $action, $value)
    {
        $this->db->set($action, $value);
        $this->db->where('email', $email);
        $this->db->update('siswa');
    }

    public function edit($data)
    {
        $this->db->where('email', $data['email']);
        $this->db->update('siswa', $data);
    }
}