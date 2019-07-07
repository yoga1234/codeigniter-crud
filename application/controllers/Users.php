<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Users extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->helper('url'); //Manually connecting this class to the helper named url
      $this->load->model('users_model'); //Manually connection this class to the model named users_model
    }

    public function index(){
      $data['users'] = $this->users_model->getAllUsers();
      $this->load->view('user_list.php', $data);
    }

    public function addNew(){
      $this->load->view('addform.php');
    }

    public function insert(){
      $user['id'] = uniqid();
      $user['username'] = $this->input->post('username');
      $user['password'] = $this->input->post('password');
      $user['fname'] = $this->input->post('fname');

      $query = $this->users_model->insertUser($user);
      if($query){
        header('location:'.base_url().$this->index());
      }
    }

    public function edit($id){
      $data['user'] = $this->users_model->getUser($id);
      $this->load->view('editform', $data);
    }

    public function update($id){
      $user['username'] = $this->input->post('username');
      $user['password'] = $this->input->post('password');
      $user['fname'] = $this->input->post('fname');

      $query = $this->users_model->updateuser($user, $id);

      if($query){
        header('location:'.base_url().$this->index());
      }
    }

    public function delete($id){
      $query = $this->users_model->deleteUser($id);

      if($query){
        header('location:'.base_url().$this->index());
      }
    }
  }

?>
