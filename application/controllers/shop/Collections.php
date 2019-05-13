<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collections extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('product_model');
    }

    public function index(){
        $card['result'] = $this->product_model->get_all_product();
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('includes/header_view.php', NULL, TRUE);
        $data['content'] = $this->load->view('includes/content.php', $card, TRUE);
        $data['footer'] = $this->load->view('includes/footer_view.php', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/homePage_view.php', $data);
    }
}

?>