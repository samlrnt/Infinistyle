<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('Order_model');
        $dt['title'] = "Orders";
        $dt['orders'] = $this->Order_model->get_all_order();
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['js'] =  $this->load->view('includes/js.php', NULL, TRUE);
        $data['sidenav'] = $this->load->view('includes/admin/sidenav',NULL,TRUE);
        $data['title'] = $this->load->view('includes/title',$dt,TRUE);
        $data['header'] = $this->load->view('includes/admin/header',NULL,TRUE);
        $data['orders'] = $this->load->view('includes/admin/orders', $dt, TRUE);
        $data['footer'] = $this->load->view('includes/admin/footer', NULL, TRUE);
        $this->load->view('pages/admin/orders_view', $data);
    }

    public function update_order(){
      // $values = [
      //   "ProductID" => $this->input->post('product_id'),
      //   "ProductName" => $this->input->post('product_name'),
      //   "UnitsInStock" => $this->input->post('stock'),
      //   "UnitPrice" => $this->input->post('price')
      // ];

      // $this->Product_model->update($values);
      redirect("admin/orders");
    }

    public function delete_order(){
      // $values = [
      //   "ProductID" => $this->input->post('product_id'),
      //   "ProductName" => $this->input->post('product_name'),
      //   "UnitsInStock" => $this->input->post('stock'),
      //   "UnitPrice" => $this->input->post('price')
      // ];

      // $this->Product_model->update($values);
      redirect("admin/orders");
    }

}
