<?php 

class Mahasiswa_model {
    // private $mhs = 
    // [
    //     [
    //         "nama" => "candra",
    //         "nrp" => "123120049",
    //         "email" => "candra@dwi",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Desy",
    //         "nrp" => "123120047",
    //         "email" => "desi@dwi",
    //         "jurusan" => "biologi"   
    //     ],
    //     [
    //         "nama" => "enan",
    //         "nrp" => "123120099",
    //         "email" => "enan@dwi",
    //         "jurusan" => "apapun yang kamu maju"
    //     ]
    //     ];

    //ngambil dari db
    
    private $dbh; //database handles
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e) {
            die($e->getMessage());
        }
    }

        public function getAllMahasiswa() 
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}