<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CrudController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('HomeModel');
        $this->form_validation->set_error_delimiters('<div class="text-danger at-1 mb-3">', '</div>');
        
    }

    public function index(){
        $this->load->helper('form');
        $this->load->view('insert');
        $this->form_validation->set_error_delimiters('<div class="text-danger at-1 mb-3">', '</div>');

    }
    public function add_data(){
        $this->load->model('HomeModel');
        $this->form_validation->set_rules('name','full name','required|trim');
        if($this->form_validation->run())
        {
            $post=$this->input->post();
            $this->HomeModel->add_data($post);
            


        }else{
            $this->load->view('insert');
        }

    }
       
}

