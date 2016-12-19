<?php

class Home_model extends CI_Model {

    //put your code here

    public function all_users() {
        return $this->db->select("*")->from("users")->get()->result();
    }

}
