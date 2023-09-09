<?php 

class About extends Controller {
  public function index($nama = "Okra", $hobi ="game")
  {
    $data['nama'] = $nama;
    $data['hobi'] = $hobi;
    $data['judul'] = 'Halaman About';

    $this->view('layout/header',$data);
    $this->view('about/index',$data);
    $this->view('layout/footer');
  }

  public function page()
  {
    $data['judul'] = "Halaman Page";

    $this->view('layout/header',$data);
    $this->view('about/page',);
    $this->view('layout/footer');
  }
}