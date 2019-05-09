<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

        /*Initialize products in the cards*/
        public function __construct(){
            parent::__construct();
            $this->load->model('product_model');
        }

        /*Landing home page*/
        public function index(){
            $data['result'] = $this->product_model->get_all_product();
            $this->load->view('includes/css.php');
            $this->load->view('includes/header_view.php');
            $this->load->view('includes/content.php', $data);
            $this->load->view('includes/footer_view.php');
            $this->load->view('includes/js.php');
        }

        /*Sign In*/
        public function sign_in(){
            $this->load->view('includes/css.php');
            $this->load->view('includes/login.php');
            $this->load->view('includes/js.php');
        }

        public function user_login_process(){
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                if(isset($this->session->userdata['logged_in'])){
                    $this->load->view('includes/admin/adminDashboard_view.php');
                }else{
                    $this->load->view('includes/login.php');
                }
            }else {
                $data = array(
                    'username'=> $this->input->post('username'),
                    'password'=> md5($this->input->post('password'))
                );
                $result = $this->login($data);
                if($result == TRUE){
                    $username = $this->input->post('username');
                    $result = $this->read_user_information($username);

                    if($result != false){
                        $session_data = array(
                        'username' => $result[0]->username,
                        'email' => $result[0]->email,
                        );
                            //add data user ke session
                        $this->session->set_userdata('logged_in', $session_data);
                        $this->load->view('includes/admin/adminDashboard_view.php');
                    }
                } else {
                    $data = array(
                        'error_message' => 'Invalid Username or Password!'
                    );
                    $this->load->view('includes/login.php', $data);
                }
            }
        }

        /*Sign Up*/
        public function sign_up(){
            $this->load->view('includes/css.php');
            $this->load->view('includes/register.php');
            $this->load->view('includes/js.php');
        }
    }
 ?>
