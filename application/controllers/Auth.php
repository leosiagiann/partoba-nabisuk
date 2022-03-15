<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('siswa_model');
		$this->load->model('guru_model');
		$this->load->model('komentar_model');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function index_login()
	{
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email',
			[
				'required' => 'Email tidak boleh kosong',
				'valid_email' => 'Email harus dengan format @'
			]
		);
		$this->form_validation->set_rules(
			'password',
			'password',
			'required|trim',
			[
				'required' => 'Password tidak boleh kosong'
			]
		);
		if ($this->form_validation->run() == false) {
			$data['title'] = "Login";
			$this->load->view('templates/header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/footer');
		} else {
			$this->login();
		}
	}

	public function lupapw()
	{
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email',
			[
				'required' => 'Harap isi email Anda',
				'valid_email' => 'Email harus dengan format @'
			]
		);
		if ($this->form_validation->run() == false) {
			$data['title'] = "Lupa Password";
			$this->load->view('templates/header', $data);
			$this->load->view('auth/lupa-password');
			$this->load->view('templates/footer');
		} else {
			$email = $this->input->post('email');
			$user = $this->siswa_model->get($email);
			if ($user) {
				if ($user['validOrNo'] == 1) {
					$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
					$verifikasi = '';
					for ($i = 0; $i < 32; $i++) {
						$no = rand(0, strlen($karakter) - 1);
						$verifikasi .= $karakter[$no];
					}
					$user_verifikasi = [
						'email' => $email,
						'verifikasi' => $verifikasi,
						'tanggal_buat' => time()
					];
					$this->db->insert('user_verifikasi', $user_verifikasi);
					$this->kirimEmail($verifikasi, 'lupa_password', $email);
					$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Silahkan cek email Anda untuk mereset password </div>');
					redirect('auth/lupapw');
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Email Anda belum diaktivasi </div>');
					redirect('auth/lupapw');
				}
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Email Anda tidak terdaftar </div>');
				redirect('auth/lupapw');
			}
		}
	}

	public function register()
	{
		$f = $this->form_validation;
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
			'email',
			'Email',
			'required|trim|valid_email|is_unique[siswa.email]',
			[
				'required' => 'Email tidak boleh kosong',
				'is_unique' => 'Email anda telah terdaftar',
				'valid_email' => 'Email harus dengan format @'
			]
		);
		$f->set_rules(
			'no_telp',
			'NoTelp',
			'required|trim|integer|is_unique[siswa.no_telp]',
			[
				'required' => 'No telepon tidak boleh kosong',
				'is_unique' => 'No telepon hanya boleh digunakan sekali',
				'integer' => 'Nomor telepon hanya boleh angka'
			]
		);
		$f->set_rules(
			'password1',
			'Password1',
			'required|trim|min_length[4]|matches[password2]|max_length[12]',
			[
				'matches' => 'Password tidak sama',
				'min_length' => 'Password terlalu pendek',
				'required' => 'Password tidak boleh kosong',
				'max_length' => 'Password terlalu panjang'
			]
		);
		$f->set_rules('password2', 'Password2', 'required|trim');
		if ($f->run() == false) {
			$data['title'] = "Register";
			$this->load->view('templates/header', $data);
			$this->load->view('auth/register');
			$this->load->view('templates/footer');
		} else {
			$email = $this->input->post('email', true);
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($email),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
				'foto' => 'default.png',
				'validOrNo' => 0
			];
			$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
			$verifikasi = '';
			for ($i = 0; $i < 32; $i++) {
				$no = rand(0, strlen($karakter) - 1);
				$verifikasi .= $karakter[$no];
			}
			$user_verifikasi = [
				'email' => $email,
				'verifikasi' => $verifikasi,
				'tanggal_buat' => time()
			];
			// $this->siswa_model->tambah($data);
			// $this->db->insert('user_verifikasi', $user_verifikasi);
			$this->kirimEmail($verifikasi, 'verifikasi', $email);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Akun anda berhasil ditambahkan, harap verifikasi email anda!
            </div>');
			redirect('auth/index_login');
		}
	}

	private function kirimEmail($verifikasi, $tipe, $email)
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
		$this->email->to($email);
		if ($tipe == 'verifikasi') {
			$this->email->subject('Verifikasi Akun');
			$this->email->message(
				"Klik link ini untuk Memverifikasi Akun Anda :
                    <a href='" . base_url() . 'auth/verify?email=' . $email . '&verifikasi=' . $verifikasi . "'>Verifikasi</a>"
			);
		} elseif ($tipe == 'lupa_password') {
			$this->email->subject('Lupa Password');
			$this->email->message(
				"Klik link ini untuk Mengatur ulang Kata Sandi :
                <a href='" . base_url() . 'auth/resetpassword?email=' . $email . '&verifikasi=' . $verifikasi . "'>Reset Password</a>"
			);
		}
		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function komen()
	{
		$i = $this->input;
		$data = array(
			'judul' => $i->post('judul'),
			'nama' => $i->post('nama'),
			'email' => $i->post('email'),
			'deskripsi' => $i->post('message'),
		);
		$this->komentar_model->tambah($data);
		$this->index();
	}

	private function login()
	{
		$i = $this->input;
		$email = $i->post('email');
		$password = $i->post('password');
		$siswa = $this->siswa_model->get($email);
		$admin = $this->db->get_where('admin', ['email' => $email])->row_array();
		$guru = $this->guru_model->get($email);
		if ($siswa) {
			if ($siswa['validOrNo'] == 1) {
				if (password_verify($password, $siswa['password'])) {
					$data = [
						'email' => $siswa['email'],
						'nama' => $siswa['nama'],
					];
					$this->session->set_userdata($data);
					$this->session->set_flashdata('login-siswa', 'Berhasil!');
					redirect('siswa');
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Password anda Salah!</div>');
					redirect('auth/index_login');
				}
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Anda belum melakukan aktivasi email! </div>');
				redirect('auth/index_login');
			}
		} else if ($admin) {
			if (password_verify($password, $admin['password'])) {
				$data = [
					'email' => $admin['email'],
					'nama' => $admin['nama'],
				];
				$this->session->set_userdata($data);
				$this->session->set_flashdata('login-admin', 'Berhasil!');
				redirect('admin');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Password anda Salah!</div>');
				redirect('auth/index_login');
			}
		} else if ($guru) {
			if (password_verify($password, $guru['password'])) {
				$data = [
					'email' => $guru['email'],
					'nama' => $guru['nama'],
				];
				$this->session->set_userdata($data);
				$this->session->set_flashdata('login-guru', 'Berhasil!');
				redirect('guru');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Password anda Salah!</div>');
				redirect('auth/index_login');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Akun anda tidak terdaftar!
            </div>');
			redirect('auth/index_login');
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$verifikasi = $this->input->get('verifikasi');
		$siswa = $this->siswa_model->get($email);
		if ($siswa) {
			$verifikasi_email = $this->db->get_where('user_verifikasi', ['verifikasi' => $verifikasi])->row_array();
			if ($verifikasi_email) {
				if (time() - $verifikasi_email['tanggal_buat'] < (60 * 60 * 48)) {
					$this->siswa_model->setFree($email, 'validOrNo', 1);
					$this->db->delete('user_verifikasi', ['email' => $email]);
					$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                    ' . $email . ' berhasil di aktivasi! Silahkan Login </div>');
					redirect('auth/index_login');
				} else {
					$this->siswa_model->hapus($email);
					$this->db->delete('user_verifikasi', ['email' => $email]);
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Kode Verifikasi Anda sudah kadaluarsa </div>');
					redirect('auth/index_login');
				}
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Kode Verifikasi anda tidak valid! </div>');
				redirect('auth/index_login');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Akun aktifasi anda gagal, Email tidak terdaftar!
            </div>');
			redirect('auth/index_login');
		}
	}

	public function resetpassword()
	{
		$email = $this->input->get('email');
		$verifikasi = $this->input->get('verifikasi');
		$siswa = $this->db->get_where('siswa', ['email' => $email])->row_array();
		if ($siswa) {
			$verifikasi_email = $this->db->get_where('user_verifikasi', ['verifikasi' => $verifikasi])->row_array();
			if ($verifikasi_email) {
				if (time() - $verifikasi_email['tanggal_buat'] < (60 * 60 * 48)) {
					$this->session->set_userdata('reset_password', $email);
					$this->session->set_userdata('token', $verifikasi);
					$this->ubahPassword();
				} else {
					$this->db->delete('siswa', ['email' => $email]);
					$this->db->delete('user_verifikasi', ['email' => $email]);
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Reset Password gagal, Kode Verifikasi kadaluarsa </div>');
					redirect('auth/index_login');
				}
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Reset Password gagal, Kode Verifikasi tidak valid! </div>');
				redirect('auth/index_login');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Reset Password gagal, Email tidak terdaftar!
            </div>');
			redirect('auth/index_login');
		}
	}

	public function ubahPassword()
	{
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[4]|max_length[12]',
			[
				'min_length' => 'Password terlalu pendek',
				'required' => 'Password tidak boleh kosong',
				'max_length' => 'Password terlalu panjang'
			]
		);
		if ($this->form_validation->run() == false) {
			$data['title'] = "Ubah Password";
			$this->load->view('templates/header', $data);
			$this->load->view('auth/ubah-password');
			$this->load->view('templates/footer');
		} else {
			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_password');
			$token = $this->session->userdata('token');
			$this->siswa_model->setFree($email, 'password', $password);
			$this->db->delete('user_verifikasi', ['verifikasi' => $token]);

			$this->session->unset_userdata('token');
			$this->session->unset_userdata('reset_password');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Password telah diubah, Silahkan Login!
            </div>');
			redirect('auth/index_login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('nama');
		$this->session->set_flashdata('logout-user', 'berhasil');
		redirect('auth/index_login');
	}
}