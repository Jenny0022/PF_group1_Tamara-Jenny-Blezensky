<?php
/**
 * summary
 */
 class Beranda extends CI_Controller
 {
     public function index()
     {
        $data['judul']= 'Library';
        $this->load->view('templates/header',$data);
        $this->load->view('Beranda/index',$data);
        $this->load->view('templates/footer');
     }
 }
  ?>  