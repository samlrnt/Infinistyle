<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('product_model');
    }

    public function index(){
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('includes/header_view.php', NULL, TRUE);
        $data['details'] = $this->load->view('includes/details.php', NULL, TRUE);
        $data['footer'] = $this->load->view('includes/footer_view.php', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/productDetails_view.php', $data);
    }

}

?>
