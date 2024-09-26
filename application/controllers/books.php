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
        $this->form_validation->set_rules('Title','Title','required');
        $this->form_validation->set_rules('Author','Author','required');
        if($this->form_validation->run()==false){
        $this->load->view('templates/header', $data);
        $this->load->view('books/index', $data);
        $this->load->view('templates/footer');    
        }else {
            $data=[
                'Title' => $this->input->post('Title'),
                'Author' => $this->input->post('Author'),

            ];
            $this->db->insert('books',$data);
            redirect('books');
        }    
    }

}