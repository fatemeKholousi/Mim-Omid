<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
 }

 public function index()
 {
     $this->load->view('register');
 }
 function registerNow(){
    if($_SERVER['REQUEST_METHOD']=='POST')
    {         $this->form_validation->set_rules('username','User Name','required');
         $this->form_validation->set_rules('password','Password','required');
         $this->form_validation->set_rules('email','Email','required');

         if($this->form_validation->run()==TRUE)
         {
           $username=$this->input->post('username')  ;
           $password=$this->input->post('password')  ;
           $email=$this->input->post('email')  ;
           $level=$this->input->post('level')  ;

           $data=array(
               'username'=>$username,
               'password'=>md5($password),
               'email'=>$email,
               'level'=>$level
           );
           $this->load->model('user_model');
           $this->user_model->insertuser($data);
           $this->session->set_flashdata('success','کاربر با موفقیت ایجاد شد');

           redirect(base_url('index.php/welcome/show_registered_info'));

         }

     }
 }

}
?>
