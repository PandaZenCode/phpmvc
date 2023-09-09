<?php 


class Home extends Controller{
  public function index()
  {
    $data['judul'] = "Halaman Home";
    $data['nama'] = $this->model('User_model')->getUser();

    $this->view('layout/header',$data);
    $this->view('home/index', $data);
    $this->view('layout/footer');
  }
}