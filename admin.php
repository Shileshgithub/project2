<?php

class admin extends MY_controller{
    public function index(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('uname','Username','required|alpha');
        $this->form_validation->set_rules('pass','password','required|max_length[12]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

        if($this->form_validation->run())
        {
           $uname=$this->input->post('uname');
           $pass=$this->input->post('pass');
           $this->load->model('loginmodel');
           $login_id=$this->loginmodel->isvalidate($uname,$pass);
           if($login_id)
           {
              //session me dal kr dashbord m shok kara dege
              $this->session->set_userdata('id',$login_id);
              return redirect('admin/welcome');
           }
           else
            {
               
               echo "details not matched";
            }
           
        }else{
           $this->load->view('admin/login');
        
        }
    }

    public function welcome(){

      $this->load->model('loginmodel');
      $this->loginmodel->articlelist();
      $this->load->view('admin/dashboard');
    }
    
}









?>