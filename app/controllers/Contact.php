<?php 

class Contact extends Controller{
  public function index()
  {
    $data['judul'] = 'Halaman Contact';

    $this->view('layout/header',$data);
    $this->view('contact/index');
    $this->view('layout/footer');
  }
}