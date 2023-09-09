<?php 

class Projects extends Controller{
  public function index()
  {
    $data['judul'] = 'Halaman Project';

    $this->view('layout/header',$data);
    $this->view('project/index');
    $this->view('layout/footer');
  }


}