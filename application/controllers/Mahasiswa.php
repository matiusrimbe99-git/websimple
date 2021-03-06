<?php
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->MahasiswaModel->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Mahasiswa';
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->MahasiswaModel->tambahMahasiswa();
            $this->session->set_flashdata('message', 'ditambahkan');
            redirect('mahasiswa');
        }
    }

    public function hapus($id) {
        $this->MahasiswaModel->hapusMahasiswa($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('mahasiswa');
    }
}
