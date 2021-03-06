<?php
class MahasiswaModel extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('tb_mhs')->result_array();
    }

    public function tambahMahasiswa()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'nim' => $this->input->post('nim', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true)
        ];
        $this->db->insert('tb_mhs', $data);
    }

    public function hapusMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_mhs');
    }
}
