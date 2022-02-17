<?php
   class Profile extends CI_Controller{
    function index(){
        $this->load->view('v_profile');
    }
    function biodata(){
        $this->load->view('v_biodata');
    }
    function data($nama, $kelas, $ttl, $alamat){
       $data = [
           'nama' => $nama,
           'kelas' => $kelas,
           'ttl' => $ttl,
           'alamat' => $alamat,
       ];
        $this->load->view('v_data', $data);
    }
    public function tambah_data(){
        $this->load->view('v_tambah_data_profile');
    }
    public function action_tambah_data(){
        $add = [
            'nama_depan'  => $this->input->post('nama_depan'),
            'nama_belakang' => $this->input->post('nama_belakang'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
        ];
        $this->db->insert('tbl_profile', $add);
        redirect('../profile/tampil_data');
    }
    public function tampil_data(){
         $this->load->model('M_profile');
         $data['profile'] = $this->M_profile->tampil_data()->result();
         $this->load->view('v_tampil_data_profile', $data);
    }
    public function update_data($id){
        $this->load->model('M_profile');
        $data['profile'] = $this->M_profile->get_data_by_id($id)->row_array();
        $this->load->view('v_update_data_profile', $data);
    }
    public function action_update_data(){
        $id = $this->input->post('id');
        $update = [
            'nama_depan'  => $this->input->post('nama_depan'),
            'nama_belakang' => $this->input->post('nama_belakang'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
        ];
        $update =$this->db->update('tbl_profile', $update, ['id' => $id]);
        redirect('../profile/tampil_data');
    }
    public function hapus_data($id){
        $id = $id;
        $this->db->delete('tbl_profile', ['id' => $id]);
        redirect('../profile/tampil_data');
        }
}
?>