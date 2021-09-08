<?php 
class userModel extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();

    }


     function cekAkun($username,$password){

        $query=$this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
        return $query;
    }
 
}