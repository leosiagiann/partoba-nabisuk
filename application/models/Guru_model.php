<?php
defined('BASEPATH') or exit('No direct script access allowed');

class guru_model extends CI_Model
{
    //load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll()
    {
        return $this->db->get('guru');
    }

    public function get($email)
    {
        $guru = $this->db->get_where('guru', array('email' => $email))->row_array();
        return $guru;
    }

    public function tambah($data)
    {
        $this->db->insert('guru', $data);
    }

    public function hapus($nip)
    {
        $this->db->delete('guru', array('nip' => $nip));
    }

    public function setFree($email, $action, $value)
    {
        $this->db->set($action, $value);
        $this->db->where('email', $email);
        $this->db->update('guru');
    }

    public function edit($data)
    {
        $this->db->where('email', $data['email']);
        $this->db->update('guru', $data);
    }
}