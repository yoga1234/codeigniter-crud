<?php

  class Users_model extends CI_Model {
    function __construct(){
      parent::__construct();
      //Manually connecting this class to the database.
      $this->load->database();
    }

    /*
    *function getAllUsers
    *$this->db->get('users') same as "SELECT * FROM USERS"
    *$query->result() will return array of object
    *example:
    * Array
    * (
    *   [0] => stdClass Object
    *     (
    *       [id] => 1
    *     )
    * )
    */

    public function getAllUsers(){
      $query = $this->db->get('users');
      return $query->result();
    }

    /*
    *function insertUser
    *$this->db->insert('users', $user);
    *same as
    *INSERT INTO users(id, name) VALUES ('id1', 'name1');
    */
    public function insertUser($user){
      return $this->db->insert('users', $user);
    }

    /*
    *function getUser
    *$this->db->get_where('users', array('id'=>));
    *same as
    *SELECT * FROM users WHERE id = 1;
    *row_array() return an array
    */
    public function getUser($id){
      $query = $this->db->get_where('users', array('id'=>$id));
      return $query->row_array();
    }

    /*
    *function updateUser
    *same as
    *UPDATE users
    *SET username = '{$username}'
    *WHERE id = $id
    */
    public function updateUser($user, $id){
      $this->db->where('users.id', $id);
      return $this->db->update('users', $user);
    }

    /*
    *function deleteUser
    *same as
    *DELETE FROM users
    *WHERE id = $id
    */
    public function deleteUser($id){
      $this->db->where('users.id', $id);
      return $this->db->delete('users');
    }
  }

?>
