<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_controller{
    public function index(){
        $data['konten']="profil";
        $this->load->view('index',$data);
    }
}
?>