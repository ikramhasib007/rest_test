<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model("home_model");
    }

    public function index() {
        $data = array();
        $data["all_users"] = $this->home_model->all_users();
        $data["content"] = $this->load->view("content", $data, TRUE);
        $this->load->view('master', $data);
    }

}
