<?php

/**
 *  summary
 */
 class books_model extends CI_Model{
    public function getAllBooks()
    {
        // //menggunakan cara pertama
        // $query = $this->db->get('books');
        // return &query->result_array();
        // menggunakan cara cepat methode chaining // pemanggilan database
    return $this->db->get('books')->result_array();

    }

 }
    






 
