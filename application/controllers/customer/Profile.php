<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        //$this->load->model('Customer_model')
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('includes/user/navbar', NULL, TRUE);
        $data['header'] = $this->load->view('includes/user/header', NULL, TRUE);
        $data['profile'] = $this->load->view('includes/user/profile', NULL, TRUE);
        $data['footer'] = $this->load->view('includes/user/footer', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/user/customerProfile_view.php', $data);

    }

}

 ?>
