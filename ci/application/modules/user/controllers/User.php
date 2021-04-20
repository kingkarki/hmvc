<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends MX_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    if (isset($_POST) && count($_POST) != 0) {
      $this->load->view('list', $_POST);
    } else {
      $this->load->view('form');
    }
  }

  public function save()
  {
    echo $this->input->post('first_name');
  }
}
