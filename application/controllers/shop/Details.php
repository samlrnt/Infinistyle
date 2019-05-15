<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('product_model');
    }

    /*public function index(){
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('includes/shop/header.php', NULL, TRUE);
        $data['details'] = $this->load->view('includes/shop/details.php', $detail, TRUE);
        $data['footer'] = $this->load->view('includes/shop/footer.php', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/shop/productDetails_view.php', $data);
    }*/

    public function display(){
        $id = $this->input->get('productID');
        $where = array('productID'=>$id);
        $detail['product'] = $this->product_model->display($where,'products')->result();

        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $data['header'] = $this->load->view('includes/shop/header.php', NULL, TRUE);
        $data['details'] = $this->load->view('includes/shop/details.php', $detail, TRUE);
        $data['footer'] = $this->load->view('includes/shop/footer.php', NULL, TRUE);

        $this->load->view('pages/shop/productDetails_view.php',$data);

    }
}

?>
