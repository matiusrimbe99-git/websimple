<?php
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->MahasiswaModel->getAllMahasiswa();
        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->MahasiswaModel->cariMahasiswa();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Mahasiswa';
        $data['jurusan'] = ['Teknik Informatika & Komputer', 'Teknik Informatika', 'Teknik Komputer'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->MahasiswaModel->tambahMahasiswa();
            $this->session->set_flashdata('message', 'ditambahkan!');
            redirect('mahasiswa');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->MahasiswaModel->getMahasiswaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Mahasiswa';
        $data['mahasiswa'] = $this->MahasiswaModel->getMahasiswaById($id);
        $data['jurusan'] = ['Teknik Informatika & Komputer', 'Teknik Informatika', 'Teknik Komputer'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->MahasiswaModel->editMahasiswa();
            $this->session->set_flashdata('message', 'diubah');
            redirect('mahasiswa');
        }
    }

    public function hapus($id)
    {
        $this->MahasiswaModel->hapusMahasiswa($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('mahasiswa');
    }
}
