<?php
class MahasiswaModel extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('tb_mhs')->result_array();
    }

    public function cariMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('email', $keyword);
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

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('tb_mhs', ['id' => $id])->row_array();
    }

    public function editMahasiswa()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'nim' => $this->input->post('nim', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_mhs', $data);
    }

    public function hapusMahasiswa($id)
    {
        $this->db->delete('tb_mhs', ['id' => $id]);
    }
}
