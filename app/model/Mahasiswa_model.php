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
    
  
private $table = 'mahasiswa';
private $db;

public function __construct()
{
    $this->db = new Database;
}
    

        public function getAllMahasiswa() 
        {
           $this->db->query('SELECT * FROM ' . $this->table);
           return $this->db->resultSet();
        }

        public function getMahasiswaById($id)
        {
            $this->db->query('SELECT * FROM ' .$this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }
        public function tambahDataMahasiswa($data)
        {
            $query = "INSERT INTO mahasiswa
            VALUES
            ('', :nama, :nrp, :email, :jurusan)";

            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('nrp', $data['nrp']);
            $this->db->bind('email', $data['nrp']);
            $this->db->bind('jurusan', $data['jurusan']);
            
            $this->db->execute();

            return $this->db->rowCount();
        }




}

