<?php 

class About {
    public function index($nama='Candra ',$pekerjaan= 'FS') 
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}