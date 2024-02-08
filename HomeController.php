<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Homecontroller extends CI_Controller{

    public function index(){


        $this->load->helper('form');
        $this->load->view('form');
    }
    public function my_func(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','username','required|trim');



        
        
        if($this->form_validation->run()){
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = '*';
            $this->load->library('upload',$config);
          if(! $this->upload->do_upload('document')){
             $error['err'] = $this->upload->display_errors();
             $this->load->view('form',$error);
           }else{
            $data = $this->upload->data();
                       
             $postdata = $this->input->post();
             
              $postdata['image'] = $data['file_name'];
            // echo "<pre>";
            //   print_r($postdata);
            
              $this->load->model('HomeModel');
              $this->HomeModel->add_data($postdata);
           }
        }else{
            $this->load->view('form');




    }


    }

}
?>