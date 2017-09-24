<?php
/*
 * Controller   : Checkout.
 * Description  : Contact us.
 * Author       : Rushikesh Koleshwar.
 * Company      : DW Technology.
 * Date         : 23 Sept 2017.
 */
class Aboutus extends CI_Controller 
{
    //get product details and main session for same.
    public function __construct() 
    {
        parent::__construct();
        //$this->load->model('order');
    }
    
    public function index()
    {
        $this->layout->setLayout("layout/frontend/index");
        $this->layout->view('frontend/about_us');
    }        
}