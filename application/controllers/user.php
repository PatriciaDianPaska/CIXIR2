<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller
{
  public function index()
  {
    $data['konten']="home";
    $this->load->view('index',$data);
  }
  public function profil()
  {
    $data['konten']="profil";
    $this->load->view('index',$data);
  }
}


?>
