<?php

class books extends CI_controller
{
     public function __construct()
    {
        parent::__construct();
        $this->load->model('books_model');

    }
    public function index()
    {
        $data['judul'] = 'books';
            $data['books']=$this->books_model->getAllBooks();
        $this->form_validation->set_rules('title','title','required');
        $this->form_validation->set_rules('author','author','required');
        if($this->form_validation->run()==false){
        $this->load->view('templates/header', $data);
        $this->load->view('books/index', $data);
        $this->load->view('templates/footer');    
    }else {
        $data = [
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),

        ];
        $this->db->insert('books', $data);
        redirect('books');

    } 

  }

}