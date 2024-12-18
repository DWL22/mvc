<?php 

class Mahasiswa extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->getAllMahasiswa();
        $this->view('tamplates/header',$data);
        $this->view('mahasiswa/index', $data);
        $this->view('tamplates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->getMahasiswaById($id);
        $this->view('tamplates/header',$data);
        $this->view('mahasiswa/detail', $data);
        $this->view('tamplates/footer');
    }
}