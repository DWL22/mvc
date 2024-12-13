<?php 

class Home extends Controller{
    public function index() 
    {
        $data['judul']= 'Home';
        $this->view('tamplates/header', $data);
        $this->view('home/index');
         $this->view('tamplates/footer');
    }
}