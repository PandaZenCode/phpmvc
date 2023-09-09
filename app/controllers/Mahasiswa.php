<?php 

class Mahasiswa extends Controller{
  public function index()
  {
    $data['judul'] = 'Halaman Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswa();

    $this->view('layout/header',$data);
    $this->view('mahasiswa/index',$data);
    $this->view('layout/footer');
  }
}