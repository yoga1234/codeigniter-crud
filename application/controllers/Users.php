<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Users extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->helper('url'); //Manually connecting this class to the helper named url
      $this->load->model('users_model'); //Manually connection this class to the model named users_model
    }

    public function index(){
      $data['users'] = $this->users_model->getAllUsers(); //Receiving data from method model
      $this->load->view('user_list.php', $data); //Load a view and parsing data into it
    }

    public function addNew(){
      $this->load->view('addform.php'); //Load a view
    }

    public function insert(){
      $user['id'] = uniqid(); //Attach uniqid method to id, to get uniq id from php
      $user['username'] = $this->input->post('username'); //getting username input
      $user['password'] = $this->input->post('password'); //getting password input
      $user['fname'] = $this->input->post('fname'); //getting fullname input

      $query = $this->users_model->insertUser($user); //Using insertUser method from model to insert data into database
      if($query){
        header('location:'.base_url().$this->index()); //If query success or true will change header or refresh the url into particular page
      }
    }

    public function edit($id){
      $data['user'] = $this->users_model->getUser($id); //Getting all data with getUser method from model
      $this->load->view('editform', $data); //load a view and send a data into it
    }

    public function update($id){
      $user['username'] = $this->input->post('username'); //getting username from input
      $user['password'] = $this->input->post('password'); //getting password from input
      $user['fname'] = $this->input->post('fname'); //getting fullname from input

      $query = $this->users_model->updateuser($user, $id); //load model and send $user and $id as parameter

      if($query){
        header('location:'.base_url().$this->index()); //Change header location
      }
    }

    public function delete($id){
      $query = $this->users_model->deleteUser($id); //load deleteUser method from model and send $id as parameter

      if($query){
        header('location:'.base_url().$this->index()); //refresh the url
      }
    }
  }

?>
