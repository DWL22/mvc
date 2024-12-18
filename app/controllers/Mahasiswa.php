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
}