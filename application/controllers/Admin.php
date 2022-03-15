<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email')) {
			redirect('auth');
		}
		$l = $this->load;
		$this->session->unset_userdata('profil');
		$l->model('admin_model');
		$l->model('guru_model');
		$l->model('komentar_model');
		$l->model('kelas_model');
		$l->model('siswa_model');
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

	private function _profil_($title, $viewnya, $id = null)
	{
		$email = $this->session->userdata('email');
		$data = $this->admin_model->get($email);
		$kelas['kelas'] = $this->kelas_model->getAll()->result();
		$kelas['kelas_siswa'] = $this->kelas_siswa_model->getAll()->result();
		$kelas['siswa'] = $this->siswa_model->getAll()->result();
		$kelas['komentar'] = $this->komentar_model->getAll()->result();
		$kelas['guru'] = $this->guru_model->getAll()->result();
		$kelas['admin'] = $this->admin_model->get($email);
		$data['title'] = $title;
		if ($id > 0) $kelas['dk'] = $this->kelas_model->getID($id);
		$this->load->view('templates/header_admin', $data);
		$this->load->view('admin/' . $viewnya, $kelas);
		$this->load->view('templates/footer_admin');
	}

	public function data_guru()
	{
		$this->_profil_('Data Guru', 'data_guru');
	}

	public function kelas_siswa()
	{
		$this->_profil_('Data Kelas', 'data_kelas');
	}

	public function kelas_siswa_detail($id)
	{
		$this->_profil_('Data Kelas', 'kelas_siswa', $id);
	}

	public function komentar()
	{
		$this->_profil_('Komentar', 'komentar');
	}

	public function download_bukti()
	{
		$i = $this->input;
		$name = $i->post('nama');
		$id = $i->post('id');
		$location = "assets/upload/bukti/" . $name;
		$this->load->helper('download');
		force_download($location, NULL);
		$this->kelas_siswa_detail($id);
	}

	public function aktifkan()
	{
		$i = $this->input;
		$id = $i->post('id');
		$id_kelas = $i->post('id_kelas');
		$kelas = $this->kelas_model->getID($id_kelas);
		$total = $kelas['jumlah'];
		$data = array(
			'id' => $id,
			'status' => 2,
			'tanggal' => date("Y-m-d")
		);
		$this->kelas_siswa_model->edit($data);
		$total++;
		$this->kelas_model->setFree($id_kelas, 'jumlah', $total);
		$this->kelas_siswa_detail($id_kelas);
	}

	public function nonaktifkan()
	{
		$i = $this->input;
		$id = $i->post('id');
		$id_kelas = $i->post('id_kelas');
		$kelas = $this->kelas_model->getID($id_kelas);
		$total = $kelas['jumlah'];
		$data = array(
			'id' => $id,
			'status' => 1,
			'tanggal' => '0000-00-00'
		);
		$this->kelas_siswa_model->edit($data);
		$total--;
		$this->kelas_model->setFree($id_kelas, 'jumlah', $total);
		$this->kelas_siswa_detail($id_kelas);
	}

	public function profile()
	{
		$this->session->set_userdata('profil', 'aktif');
		$email = $this->session->userdata('email');
		$admin = $this->admin_model->get($email);
		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'required|trim|min_length[5]',
			[
				'required' => 'Nama tidak boleh kosong',
				'min_length' => 'Nama minimal 5 karakter'
			]
		);

		if ($this->form_validation->run()) {
			// Settingan upload Foto
			$config['upload_path']         = './assets/upload/admin';
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
				$config['source_image'] = './assets/upload/admin/' . $upload_data['uploads']['file_name'];
				$config['new_image'] = './assets/upload/admin/thumbs/';
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
					'foto' => $upload_data['uploads']['file_name'],
				);
				$this->admin_model->edit($data);
				$this->session->set_flashdata('edit-profil-admin', 'berhasil');
				redirect(base_url('admin/profile'), 'refresh');
			} else {
				$i = $this->input;
				$this->session->set_userdata('nama', $i->post('nama'));
				$data = array(
					'nama' => $i->post('nama'),
					'email' => $email,
				);
				$this->admin_model->edit($data);
				$this->session->set_flashdata('edit-profil-admin', 'berhasil');
				redirect(base_url('admin/profile'), 'refresh');
			}
		}
		$this->_profil($admin);
	}

	public function tambah_guru()
	{
		$f = $this->form_validation;
		$i = $this->input;
		$f->set_rules(
			'nip_',
			'NIP',
			'required|trim|is_unique[guru.nip]|min_length[5]',
			[
				'required' => 'NIP tidak boleh kosong',
				'is_unique' => 'NIP guru telah terdaftar',
				'min_length' => 'NIP minimal 8 karakter'
			]
		);
		$f->set_rules(
			'nama_',
			'Nama',
			'required|trim|min_length[5]',
			[
				'required' => 'Nama tidak boleh kosong',
				'min_length' => 'Nama minimal 5 karakter'
			]
		);
		$f->set_rules(
			'email_',
			'Email',
			'required|trim|valid_email|is_unique[guru.email]',
			[
				'required' => 'Email tidak boleh kosong',
				'is_unique' => 'Email telah terdaftar',
				'valid_email' => 'Email harus dengan format @'
			]
		);
		$f->set_rules(
			'no_telp_',
			'NoTelp',
			'required|trim|integer|is_unique[guru.no_telp]',
			[
				'required' => 'No telepon tidak boleh kosong',
				'is_unique' => 'No telepon hanya boleh digunakan sekali',
				'integer' => 'Nomor telepon hanya boleh angka'
			]
		);
		if ($f->run() == false) {
			$this->_profil_('Data Guru', 'data_guru');
		} else {
			$email = $i->post('email_', true);
			$data = [
				'nip' => htmlspecialchars($i->post('nip_', true)),
				'nama' => htmlspecialchars($i->post('nama_', true)),
				'email' => htmlspecialchars($email),
				'password' => password_hash('1234', PASSWORD_DEFAULT),
				'no_telp' => htmlspecialchars($i->post('no_telp_', true)),
				'alamat' => "Alamat",
				'foto' => 'default.png',
				'jenis_kelamin' => $i->post('j_kel')
			];
			// $this->kirimEmail($data, 'tambah_guru');
			$this->guru_model->tambah($data);
			$this->session->set_flashdata('tambah-guru', 'berhasil');
			redirect('admin/data_guru');
		}
	}

	private function _profil($data)
	{
		$data['title'] = "Profil";
		$this->load->view('templates/header_admin', $data);
		$this->load->view('admin/profile', $data);
		$this->load->view('templates/footer_admin');
	}

	public function gantipassword()
	{
		$s = $this->session;
		$f = $this->form_validation;
		$s->set_userdata('profil', 'aktif');
		$email = $s->userdata('email');
		$admin = $this->admin_model->get($email);
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
			if (password_verify($password, $admin['password'])) {
				$pw_hash = password_hash($i->post('password1'), PASSWORD_DEFAULT);
				$this->admin_model->setFree($email, 'password', $pw_hash);
				$this->session->set_flashdata('edit-password-admin', 'berhasil');
				redirect(base_url('admin/profile'), 'refresh');
			} else {
				$this->session->set_flashdata('edit-password-admin-failed', 'gagal');
				redirect(base_url('admin/profile'), 'refresh');
			}
		}
		$this->_profil($admin);
	}

	public function edit_delete()
	{
		$this->_profil_('Data Guru', 'data_guru_edit_delete');
	}

	public function ubah_guru()
	{
		$f = $this->form_validation;
		$i = $this->input;
		if ($f->run() == false) {
			$email = $i->post('email', true);
			$data = [
				'nama' => $i->post('nama'),
				'email' => htmlspecialchars($email),
				'no_telp' => $i->post('no_telp'),
				'alamat' => $i->post('alamat'),
				'jenis_kelamin' => $i->post('j_kel')
			];
			$this->guru_model->edit($data);
		}
		$this->session->set_flashdata('edit-guru', 'berhasil');
		redirect('admin/data_guru');
	}

	public function hapus_guru()
	{
		$f = $this->form_validation;
		$i = $this->input;
		if ($f->run() == false) {
			$nip = $i->post('nip');
			$this->kelas_model->hapusByNip($nip);
			$this->guru_model->hapus($nip);
		}
		$this->session->set_flashdata('hapus-guru', 'berhasil');
		redirect('admin/data_guru');
	}

	public function tolak_kelas()
	{
		$i = $this->input;
		$id = $i->post('id');
		$data = [
			'email' => htmlspecialchars($i->post('email', true)),
			'nama_kelas' => htmlspecialchars($i->post('nama'))
		];
		$this->kelas_model->setFree($id, "status", 2);
		// $this->kirimEmail($data, 'tolak');
		$this->session->set_flashdata('tolak-kelas', 'berhasil');
		redirect('admin/kelas');
	}

	public function terima_kelas()
	{
		$i = $this->input;
		$id = $this->input->post('id');
		$data = [
			'email' => htmlspecialchars($i->post('email', true)),
			'nama_kelas' => htmlspecialchars($i->post('nama'))
		];
		$this->kelas_model->setFree($id, "status", 1);
		// $this->kirimEmail($data, 'terima');
		$this->session->set_flashdata('terima-kelas', 'berhasil');
		$this->_profil_('Kelas', 'kelas');
		redirect('admin/kelas');
	}

	private function kirimEmail($data, $tipe)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'partobanabisuk@gmail.com',
			'smtp_pass' => 'kelompokpartobanabisuk_',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n",
		];
		$this->email->initialize($config);
		$this->email->from('partobanabisuk@gmail.com', 'Partoba Nabisuk');
		$this->email->to($data['email']);
		if ($tipe == 'tolak') {
			$this->email->subject('Register Kelas Guru');
			$this->email->message('Kelas ' . $data['nama_kelas'] . ' yang anda daftar untuk sementara ini ditolak oleh admin (tidak dapat diterima) karena jumlah kelas anda sudah melebihi batas');
		} elseif ($tipe == 'terima') {
			$this->email->subject('Register Kelas Guru');
			$this->email->message('Kelas ' . $data['nama_kelas'] . ' yang anda daftar sudah dapat diapprove oleh admin, dan sudah dapat melakukan pembelajaran!!! Cek sekarang juga.');
		} elseif ($tipe == 'tambah_guru') {
			$this->email->subject('Partoba Nabisuk');
			$this->email->message('Selamat ' . $data['nama'] . '!!! Anda sudah didaftarkan menjadi guru di Partoba Nabisuk, Login Sekarang juga dan daftarkan Kelas anda');
		}
		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}
}