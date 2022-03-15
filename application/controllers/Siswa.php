<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $l = $this->load;
        $this->session->unset_userdata('profil');
        $l->model('siswa_model');
        $l->model('guru_model');
        $l->model('kelas_model');
        $l->model('materi_model');
        $l->model('upload_model');
        $l->model('request_model');
        $l->model('kelas_siswa_model');
        $l->library('form_validation');
    }

    public function index()
    {
        $this->_profil_('Dashboard', 'home');
    }

    public function data_guru()
    {
        $this->_profil_('Data Guru', 'guru');
    }

    public function materi()
    {
        $this->_profil_('Materi', 'materi');
    }

    public function daftarKelas()
    {
        $this->_profil_('Daftar Kelas', 'daftar');
    }

    public function kelas()
    {
        $this->_profil_('Kelas', 'kelas');
    }

    public function materi_detail($id = null)
    {
        $this->_profil_('Materi Detail', 'materi_detail', $id);
    }

    public function materi_2()
    {
        $this->_profil_('Materi', 'materi_2');
    }

    public function all_siswa($id = null)
    {
        $this->_profil_('Daftar Siswa', 'all_siswa', $id);
    }

    public function req_kelas()
    {
        $this->_profil_('Request Kelas', 'request_kelas');
    }

    public function history_kelas()
    {
        $this->_profil_('Histori Requset Kelas', 'history_req_kelas');
    }

    private function _profil_($title, $viewnya, $id = null)
    {
        $l = $this->load;
        $email = $this->session->userdata('email');
        $data = $this->siswa_model->get($email);
        $kelas['kelas'] = $this->kelas_model->getAll()->result();
        $kelas['kelas_siswa'] = $this->kelas_siswa_model->getAll()->result();
        $kelas['guru'] = $this->guru_model->getAll()->result();
        $kelas['materi'] = $this->materi_model->getAll()->result();
        $kelas['upload'] = $this->upload_model->getAll()->result();
        $kelas['request'] = $this->request_model->getAll()->result();
        $kelas['siswa'] = $this->siswa_model->get($email);
        $kelas['allsiswa'] = $this->siswa_model->getAll()->result();
        $data['title'] = $title;
        if ($id > 0) {
            $kelas['dk'] = $this->kelas_model->getID($id);
        }
        $l->view('templates/header_siswa', $data);
        $l->view('siswa/' . $viewnya, $kelas);
        $l->view('templates/footer_siswa');
    }

    public function daftar_kelas()
    {
        $i = $this->input;
        $id_siswa = $i->post('id_siswa');
        $id_kelas = $i->post('id_kelas');
        $data = [
            'id_siswa' => $id_siswa,
            'id_kelas' => $id_kelas,
            'bukti' => "none",
            'status' => 0,
        ];
        $this->kelas_siswa_model->tambah($data);
        $this->session->set_flashdata('daftar-kelas', 'berhasil');
        $this->daftarKelas();
    }

    public function upload_bukti()
    {
        $config['upload_path']         = './assets/upload/bukti';
        $config['allowed_types']     = 'gif|jpg|png|jpeg';
        $config['max_size']          = '2400'; // KB
        $config['max_width']          = '3000'; // Pixel
        $config['max_height']          = '3000'; //Pixel
        $this->load->library('upload', $config);
        $this->upload->do_upload('file');
        $upload_data                = array('uploads' => $this->upload->data());
        // Image Editor
        $config['image_library'] = 'gd2';
        $config['source_image'] = './assets/upload/bukti/' . $upload_data['uploads']['file_name'];
        $config['new_image'] = './assets/upload/bukti/thumbs/';
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
        $this->kelas_siswa_model->setFree($i->post('id'), 'bukti', $upload_data['uploads']['file_name']);
        $this->kelas_siswa_model->setFree($i->post('id'), 'status', 1);
        $this->session->set_flashdata('upload-bukti', 'berhasil');
        $this->daftarKelas();
    }

    public function profile()
    {
        $f = $this->form_validation;
        $this->session->set_userdata('profil', 'aktif');
        $email = $this->session->userdata('email');
        $siswa = $this->siswa_model->get($email);
        $f->set_rules(
            'nama',
            'Nama',
            'required|trim|min_length[5]',
            [
                'required' => 'Nama tidak boleh kosong',
                'min_length' => 'Nama minimal 5 karakter'
            ]
        );
        $f->set_rules(
            'no_telp',
            'NoTelp',
            'required|trim|integer',
            [
                'required' => 'No telepon tidak boleh kosong',
                'integer' => 'Nomor telepon hanya boleh angka'
            ]
        );
        if ($f->run()) {
            // Settingan upload Foto
            $config['upload_path']         = './assets/upload/siswa';
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
                $config['source_image'] = './assets/upload/siswa/' . $upload_data['uploads']['file_name'];
                $config['new_image'] = './assets/upload/siswa/thumbs/';
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
                    'foto' => $upload_data['uploads']['file_name'],
                );
                $this->siswa_model->edit($data);
                $this->session->set_flashdata('edit-profil-siswa', 'berhasil');
                redirect(base_url('siswa/profile'), 'refresh');
            } else {
                $i = $this->input;
                $this->session->set_userdata('nama', $i->post('nama'));
                $data = array(
                    'nama' => $i->post('nama'),
                    'email' => $email,
                    'no_telp' => $i->post('no_telp'),
                );
                $this->siswa_model->edit($data);
                $this->session->set_flashdata('edit-profil-siswa', 'berhasil');
                redirect(base_url('siswa/profile'), 'refresh');
            }
        }
        $this->_profil($siswa);
    }

    public function request()
    {
        $i = $this->input;
        $id = $i->post('id_siswa');
        $kuy = $this->siswa_model->getID($id);
        $data = array(
            'nip' => $i->post('nip'),
            'id_siswa' => $id,
            'mata_pelajaran' => $i->post('mapel'),
            'kelas' => $i->post('kelas'),
            'email' => $kuy['email'],
            'no_telp' => $kuy['no_telp'],
            'jumlah' => $i->post('jlh'),
            'harga' => $i->post('harga'),
            'alamat' => $i->post('alamat'),
            'deskripsi' => $i->post('deskripsi'),
            'status' => 0,
        );
        $this->request_model->tambah($data);
        $this->session->set_flashdata('req-kelas', 'berhasil');
        $this->history_kelas();
    }

    private function _profil($data)
    {
        $data['title'] = "Profil";
        $this->load->view('templates/header_siswa', $data);
        $this->load->view('siswa/profile', $data);
        $this->load->view('templates/footer_siswa');
    }

    public function gantipassword()
    {
        $s = $this->session;
        $f = $this->form_validation;
        $s->set_userdata('profil', 'aktif');
        $email = $s->userdata('email');
        $siswa = $this->siswa_model->get($email);
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
            if (password_verify($password, $siswa['password'])) {
                $pw_hash = password_hash($i->post('password1'), PASSWORD_DEFAULT);
                $this->siswa_model->setFree($email, 'password', $pw_hash);
                $this->session->set_flashdata('edit-password-siswa', 'berhasil');
                redirect(base_url('siswa/profile'), 'refresh');
            } else {
                $this->session->set_flashdata('edit-password-siswa-failed', 'gagal');
                redirect(base_url('siswa/profile'), 'refresh');
            }
        }
        $this->_profil($siswa);
    }

    public function dw_teori($id = null)
    {
        $data = $this->upload_model->get($id);
        $this->load->helper('download');
        force_download('assets/upload/materi/teori/' . $data['file'], NULL);
    }

    public function dw_prak($id = null)
    {
        $data = $this->upload_model->get($id);
        $this->load->helper('download');
        force_download('assets/upload/materi/prak/' . $data['file'], NULL);
    }
}