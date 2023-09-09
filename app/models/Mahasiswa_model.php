<?php 

class Mahasiswa_model{
  // private $mhs = [
  //   [
  //       'nama' => 'John Doe',
  //       'nim' => '12345678',
  //       'jurusan' => 'Teknik Informatika',
  //       'tahun_masuk' => '2020',
  //   ],
  //   [
  //       'nama' => 'Jane Smith',
  //       'nim' => '98765432',
  //       'jurusan' => 'Manajemen Bisnis',
  //       'tahun_masuk' => '2019',
  //   ],
  //   [
  //       'nama' => 'Alice Johnson',
  //       'nim' => '56789012',
  //       'jurusan' => 'Psikologi',
  //       'tahun_masuk' => '2021',
  //   ],
  // ];

  private $dbh;
  private $stmt;

  public function __construct()
  {
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn,'root','');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
  

  public function getMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * From mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}