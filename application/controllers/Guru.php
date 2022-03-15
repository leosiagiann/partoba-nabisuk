<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $l = $this->load;
        $this->session->unset_userdata('profil');
        $l->model('guru_model');
        $l->model('kelas_model');
        $l->model('materi_model');
        $l->model('siswa_model');
        $l->model('upload_model');
        $l->model('request_model');
        $l->model('kelas_siswa_model');
        $l->library('form_validation');
    }

    public function index()
    {
        $this->_profil_('Dashboard', 'home');
    }

    public function kelas()
    {
        $this->_profil_('Kelas', 'kelas');
    }

    public function daftarkelas()
    {
        $this->_profil_('Kelas Saya', 'daftar_kelas');
    }

    public function upload_materi($id = null)
    {
        $this->_profil_('Materi Saya', 'materi', $id);
    }

    public function daftar_siswa($id = null)
    {
        $this->_profil_('Daftar Siswa', 'daftar_siswa', $id);
    }


    public function pilih_kelas()
    {
        $this->_profil_('Pilih Kelas', 'pilih_kelas');
    }

    public function req_kelas()
    {
        $this->_profil_('Request Kelas', 'request_kelas');
    }

    public function request_detail($id = null)
    {
        $this->request_model->setFree($id, "status", 1);
        $this->_profil_('Request Kelas', 'request_detail', $id);
    }

    public function hapusreq($id)
    {
        $this->request_model->setFree($id, "status", 2);
        $this->session->set_flashdata('hapus-request', 'berhasil');
        redirect('guru/req_kelas');
    }

    public function profile()
    {
        $this->session->set_userdata('profil', 'aktif');
        $email = $this->session->userdata('email');
        $guru = $this->guru_model->get($email);
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|trim|min_length[5]',
            [
                'required' => 'Nama tidak boleh kosong',
                'min_length' => 'Nama minimal 5 karakter'
            ]
        );
        $this->form_validation->set_rules(
            'no_telp',
            'NoTelp',
            'required|trim|integer',
            [
                'required' => 'No telepon tidak boleh kosong',
                'integer' => 'Nomor telepon hanya boleh angka'
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|trim',
            [
                'required' => 'No telepon tidak boleh kosong',
            ]
        );
        if ($this->form_validation->run()) {
            // Settingan upload Foto
            $config['upload_path']         = './assets/upload/guru';
            $config['allowed_types']     = 'gif|jpg|png|jpeg';
            $config['max_size']          = '2400'; // KB
            $config['max_width']          = '3000'; // Pixel
            $config['max_height']          = '3000'; //Pixel
            $this->load->library('upload', $config);
            // Upload Foto
            if ($this->upload->do_upload('foto')) {
                $upload_data                = array('uploads' => $this->upload->data());
                // Image Editor
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/upload/guru/' . $upload_data['uploads']['file_name'];
                $config['new_image'] = './assets/upload/guru/thumbs/';
                $config['create_thumb'] = TRUE;
                $config['quality'] = "100%";
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 360; // Pixel
                $config['height'] = 360; // Pixel
                $config['x_axis'] = 0;
                $config['y_axis'] = 0;
                $config['thumb_marker'] = '';
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $i = $this->input;
                $this->session->set_userdata('nama', $i->post('nama'));
                $data = array(
                    'nama' => $i->post('nama'),
                    'email' => $email,
                    'no_telp' => $i->post('no_telp'),
                    'alamat' => $i->post('alamat'),
                    'foto' => $upload_data['uploads']['file_name'],
                );
                $this->guru_model->edit($data);
                $this->session->set_flashdata('edit-profil-guru', 'berhasil');
                redirect(base_url('guru/profile'), 'refresh');
            } else {
                $i = $this->input;
                $this->session->set_userdata('nama', $i->post('nama'));
                $data = array(
                    'nama' => $i->post('nama'),
                    'email' => $email,
                    'no_telp' => $i->post('no_telp'),
                    'alamat' => $i->post('alamat'),
                );
                $this->guru_model->edit($data);
                $this->session->set_flashdata('edit-profil-guru', 'berhasil');
                redirect(base_url('guru/profile'), 'refresh');
            }
        }
        $this->_profil($guru);
    }

    public function ganti_avatar()
    {
        $i = $this->input;
        $config['upload_path']         = './assets/img/course';
        $config['allowed_types']     = 'gif|jpg|png|jpeg';
        $config['max_size']          = '2400'; // KB
        $config['max_width']          = '3000'; // Pixel
        $config['max_height']          = '3000'; //Pixel
        $this->load->library('upload', $config);
        $this->upload->do_upload('avatar');
        $upload_data                = array('uploads' => $this->upload->data());
        $this->kelas_model->setFree($i->post('id'), 'avatar', $upload_data['uploads']['file_name']);
        $this->session->set_flashdata('edit-avatar', 'berhasil');
        $this->kelas();
    }

    private function _profil_($title, $viewnya, $id = null)
    {
        $email = $this->session->userdata('email');
        $data = $this->guru_model->get($email);
        $kelas['kelas'] = $this->kelas_model->getAll()->result();
        $kelas['kelas_siswa'] = $this->kelas_siswa_model->getAll()->result();
        $kelas['guru'] = $this->guru_model->getAll()->result();
        $kelas['materi'] = $this->materi_model->getAll()->result();
        $kelas['upload'] = $this->upload_model->getAll()->result();
        $kelas['allsiswa'] = $this->siswa_model->getAll()->result();
        $kelas['request'] = $this->request_model->getAll()->result();
        $kelas['saya'] = $this->guru_model->get($email);
        $data['title'] = $title;
        if ($id != null) {
            $kelas['id_det'] = $id;
            $kelas['kelas_det'] = $this->kelas_model->getID($id);
            $kelas['req_det'] = $this->request_model->get($id);
        }
        $this->load->view('templates/header_guru', $data);
        $this->load->view('guru/' . $viewnya, $kelas);
        $this->load->view('templates/footer_guru');
    }

    private function _profil($data)
    {
        $data['title'] = "Profil";
        $this->load->view('templates/header_guru', $data);
        $this->load->view('guru/profile', $data);
        $this->load->view('templates/footer_guru');
    }

    public function gantipassword()
    {
        $s = $this->session;
        $f = $this->form_validation;
        $s->set_userdata('profil', 'aktif');
        $email = $s->userdata('email');
        $guru = $this->guru_model->get($email);
        $f->set_rules(
            'password1',
            'Password1',
            'required|trim|min_length[4]|max_length[12]',
            [
                'min_length' => 'Password terlalu pendek',
                'required' => 'Password tidak boleh kosong',
                'max_length' => 'Password terlalu panjang'
            ]
        );
        $f->set_rules(
            'password3',
            'Password3',
            'required|trim',
            [
                'required' => 'Password tidak boleh kosong'
            ]
        );
        if ($f->run()) {
            $i = $this->input;
            $password = $i->post('password3');
            if (password_verify($password, $guru['password'])) {
                $pw_hash = password_hash($i->post('password1'), PASSWORD_DEFAULT);
                $this->guru_model->setFree($email, 'password', $pw_hash);
                $this->session->set_flashdata('edit-password-guru', 'berhasil');
                redirect(base_url('guru/profile'), 'refresh');
            } else {
                $this->session->set_flashdata('edit-password-guru-failed', 'gagal');
                redirect(base_url('guru/profile'), 'refresh');
            }
        }
        $this->_profil($guru);
    }

    public function tambah_kelas()
    {
        $s = $this->session;
        $f = $this->form_validation;
        $i = $this->input;
        $email = $s->userdata('email');
        $data = $this->guru_model->get($email);
        if ($f->run() == false) {
            $data = [
                'nama' => $i->post('nama'),
                'mata_pelajaran' => $i->post('mapel'),
                'kelas' => $i->post('kelas'),
                'nip' => $data['nip'],
                'jadwal' => $i->post('jadwal'),
                'status' => 0,
                'avatar' => "default.png",
                'harga' => 200000,
                'jumlah' => 0
            ];
            $this->kelas_model->tambah($data);
        }
        $this->session->set_flashdata('tambah-kelas', 'berhasil');
        $this->_profil_('Kelas', 'kelas');
    }

    public function add_materi()
    {
        $f = $this->form_validation;
        $i = $this->input;
        $id = $i->post('id_kelas');
        if ($f->run() == false) {
            $data = [
                'id_kelas' => $id,
                'id_guru' => $i->post('id_guru'),
                'bab' => $i->post('bab'),
                'judul' => $i->post('topik')
            ];
            $this->materi_model->tambah($data);
        }
        $this->session->set_flashdata('tambah-materi', 'berhasil');
        redirect('guru/upload_materi/' . $id);
    }

    public function upload_teori()
    {
        $f = $this->form_validation;
        $i = $this->input;
        $id = $i->post('id_materi');
        $id_kelas = $i->post('id');
        if ($f->run() == false) {
            // Settingan upload Foto
            $config['upload_path']         = './assets/upload/materi/teori';
            $config['allowed_types']     = 'application/pdf|pdf|application/octet-stream|csv|doc|docx|zip|rar|xlsx|txt|pptx';
            $config['max_size']          = '15000000'; // KB
            $this->load->library('upload', $config);
            $this->upload->do_upload('file');
            $upload_data                = array('uploads' => $this->upload->data());
            $data = array(
                'id_materi' => $id,
                'file' => $upload_data['uploads']['file_name'],
                'tipe' => 'teori'
            );
            $this->upload_model->tambah($data);
        }
        $this->session->set_flashdata('upload-teori', 'berhasil');
        $this->_profil_('Materi Saya', 'materi', $id_kelas);
        redirect('guru/upload_materi/' . $id_kelas);
    }

    public function upload_prak()
    {
        $f = $this->form_validation;
        $i = $this->input;
        $id = $i->post('id_materi');
        $id_kelas = $i->post('id');
        if ($f->run() == false) {
            // Settingan upload Foto
            $config['upload_path']         = './assets/upload/materi/prak';
            $config['allowed_types']     = 'application/pdf|pdf|application/octet-stream|csv|doc|docx|zip|rar|xlsx|txt|pptx';
            $config['max_size']          = '15000000'; // KB
            $this->load->library('upload', $config);
            $this->upload->do_upload('file');
            $upload_data                = array('uploads' => $this->upload->data());
            $data = array(
                'id_materi' => $id,
                'file' => $upload_data['uploads']['file_name'],
                'tipe' => 'praktikum'
            );
            $this->upload_model->tambah($data);
        }
        $this->session->set_flashdata('upload-prak', 'berhasil');
        redirect('guru/upload_materi/' . $id_kelas);
    }

    public function edit_kelas()
    {
        $s = $this->session;
        $f = $this->form_validation;
        $i = $this->input;
        $email = $s->userdata('email');
        $data = $this->guru_model->get($email);
        if ($f->run() == false) {
            $data = [
                'id' => $i->post('id'),
                'nama' => $i->post('nama'),
                'mata_pelajaran' => $i->post('mapel'),
                'kelas' => $i->post('kelas'),
                'jadwal' => $i->post('jadwal')
            ];
            $this->kelas_model->edit($data);
        }
        $this->session->set_flashdata('edit-kelas', 'berhasil');
        $this->_profil_('Kelas', 'kelas');
    }

    public function hapus_kelas()
    {
        $i = $this->input;
        $id = $i->post('id');
        $this->kelas_model->hapus($id);
        $materi = $this->materi_model->getAll($id)->result();
        foreach ($materi as $m) {
            if ($m->id_kelas == $id) {
                $this->upload_model->hapusByMateri($m->id);
            }
        }
        $this->materi_model->hapusByKelas($id);
        $this->kelas_siswa_model->hapusbyKelas($id);
        $this->session->set_flashdata('hapus-kelas', 'berhasil');
        $this->_profil_('Kelas', 'kelas');
    }

    public function hapus_teori()
    {
        $f = $this->form_validation;
        $i = $this->input;
        $id = $i->post('id_kelas');
        $id_upload = $i->post('id');
        if ($f->run() == false) {
            $this->upload_model->hapus($id_upload);
        }
        $this->session->set_flashdata('hapus-teori', 'berhasil');
        redirect('guru/upload_materi/' . $id);
    }

    public function hapus_praktikum()
    {
        $f = $this->form_validation;
        $i = $this->input;
        $id = $i->post('id_kelas');
        $id_upload = $i->post('id');
        if ($f->run() == false) {
            $this->upload_model->hapus($id_upload);
        }
        $this->session->set_flashdata('hapus-prak', 'berhasil');
        redirect('guru/upload_materi/' . $id);
    }
}